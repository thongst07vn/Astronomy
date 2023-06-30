<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPassword;
class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function forgot(): View{
        $tb = '';
        return view('forgot.forgot',['tb'=>$tb]);
    }
    public function show(): View{
        return view('layouts.index');
    }
    public function shows(): View{
        return view('login');
    }
    public function signup(Request $REQUEST){
        $username = $REQUEST ->username;
        $passwords = $REQUEST ->passwords;
        $repasswords = $REQUEST ->repasswords;   
        $mangcheckuser = DB::select("select * from Loginuser where username=?",[$username]);
        if(count($mangcheckuser)){
            $tb = "Gmail Has Already Taken";
            return redirect('login')->with('tb',$tb);
        }else{
            if(!preg_match("/^([a-z0-9A-Z]+(@gmail)+(\.com))/i",$username)){
                return redirect('login');
            }else{
                if(!preg_match("/^(?=.{8,20})(?=.*[A-Z])(?=.*[0-9])/i",$passwords)){
                    return redirect('login');
                }else{
                    if($passwords == $repasswords){
                        DB::table('Loginuser')->insert([
                            'username' => $username,
                            'passwords' => HASH::make($passwords),
                            'avatar' => 'image/avt.jpg'
                        ]);
                        $tb = "User Create Sussecful";
                        return redirect('login')->with('tb',$tb);
                    }else{
                        return redirect('login');
                    }
                }
            }
            
        }
        
    }
    public function signin(Request $REQUEST){
        $usernamesignin = $REQUEST -> usernamesignin;
        $passwordssigin = $REQUEST -> passwordssignin;
        $manguser = DB::select("select username from Loginuser where username=?",[$usernamesignin]);
        $mangpassword = DB::select("select passwords from Loginuser where username=?",[$usernamesignin]);
        
        if(count($manguser)){
            
            foreach($mangpassword as $check){
                if(Hash::check($passwordssigin,$check->passwords)){
                    $r=session(['username1'=>$usernamesignin]);
                    return redirect('home');

                }else{
                    $tb = 'Password Incorrect';
                    return redirect('login')->with('tb',$tb);
                }
            }
        }else{
            $tb = 'Gmail Incorrect';
            return redirect('login')->with('tb',$tb);
        }
    }
    public function signout(Request $REQUEST){
        $r = session(['username1'=>null]);
        return redirect('/');
    }
    public function forgotmail(Request $REQUEST):View{
        $email = $REQUEST->email;
        $chekcemail=session(['email'=>$email]);
        $text="ZXCVBNMASDFGHJKLQWERTYUIOP";
        $content =mt_rand(0,9).$text[rand(0, strlen($text) - 1)].mt_rand(0,9).$text[rand(0, strlen($text) - 1)];
        $tam = '';
        $tb = '';
        $check =session(['OTP'=>$content]);
        $mailable = new ForgotPassword($content);
        $manguser = DB::select("select username from Loginuser where username=?",[$email]);
        if(count($manguser)){
            Mail::to($email)->send($mailable);
            return view('forgot.OTP', ['tam'=>$tam]);
        }else{
            $tb = 'Unregistered Gmail';
            return view('forgot.forgot',['tb'=>$tb]);
        }
        
    }
    public function checkotp(Request $REQUEST):View{
        $otp = session('OTP');
        $tam = '';
        $number = ($REQUEST->one).($REQUEST->two).($REQUEST->three).($REQUEST->four);
        if($otp == $number){
            return view('forgot.resetpassword');
        }else { 
            $tam = "Sai OTP";
            return view('forgot.OTP',['tam' => $tam]);
        }
    }
    public function reset(Request $REQUEST){
        $email=session('email');
        $passwords = $REQUEST ->passwords;
        $repasswords = $REQUEST ->repasswords;   
        if(!preg_match("/^(?=.{8,20})(?=.*[A-Z])(?=.*[0-9])/i",$passwords)){
            return back();
        }else{
            if($passwords == $repasswords){
                DB::update(
                    'update Loginuser set passwords = ? where username = ?',[HASH::make($passwords),$email]
                );
                $tb='Change Password Successfully';
                return redirect('login')->with('tb',$tb);
            }else{
                return back();
            }
        }
    }
}
    