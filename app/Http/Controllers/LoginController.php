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
        return view('forgot.forgot');
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
            $tb = "Email Has Already Taken";
            return redirect('login')->with('tb',$tb);
        }else{
            if(!preg_match("/^(?=.{8,20})(?=.*[A-Z])(?=.*[0-9])/i",$passwords)){
                return redirect('login');
            }else{
                if($passwords == $repasswords){
                    DB::table('Loginuser')->insert([
                        'username' => $username,
                        'passwords' => HASH::make($passwords),
                        'avatar' => 'IMAGE/avt.jpg'
                    ]);
                    $tb = "User Create Sussecful";
                    return redirect('login')->with('tb',$tb);
                }else{
                    return redirect('login');
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
                    $r=$REQUEST->session()->put('username1',$usernamesignin);
                    return redirect('home');

                }else{
                    $tb = 'Password Incorrect';
                    return redirect('login')->with('tb',$tb);
                }
            }
        }else{
            $tb = 'Email Incorrect';
            return redirect('login')->with('tb',$tb);
        }
    }
    public function signout(Request $REQUEST){
        $r = $REQUEST->session()->flush();
        return redirect('/');
    }
    public function forgotmail(Request $REQUEST):View{
        $email = $REQUEST->email;
        $chekcemail=$REQUEST->session()->put('email',$email);
        $text="ZXCVBNMASDFGHJKLQWERTYUIOP";
        $content =mt_rand(0,9).$text[rand(0, strlen($text) - 1)].mt_rand(0,9).$text[rand(0, strlen($text) - 1)];
        $tam = '';
        $check =$REQUEST->session()->put('OTP',$content);
        $mailable = new ForgotPassword($content);
        Mail::to($email)->send($mailable);
        return view('forgot.OTP', ['tam'=>$tam]);
    }
    public function checkotp(Request $REQUEST):View{
        $otp = $REQUEST->session()->get('OTP');
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
        $email=$REQUEST->session()->get('email');
        $passwords = $REQUEST ->passwords;
        $repasswords = $REQUEST ->repasswords;   
        if(!preg_match("/^(?=.{8,20})(?=.*[A-Z])(?=.*[0-9])/i",$passwords)){
            return redirect()->back();
        }else{
            if($passwords == $repasswords){
                DB::update(
                    'update Loginuser set passwords = ? where username = ?',[HASH::make($passwords),$email]
                );
                return redirect('index');
            }else{
                return redirect()->back();
            }
        }
    }
}
    