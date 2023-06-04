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
class LoginController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(): View{
        return view('login');
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
                    return redirect('login');

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
        return redirect('login');
    }
}
    