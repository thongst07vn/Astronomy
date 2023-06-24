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
class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        return view('admin.layouts.dashboard');
        
    }
    public function showtb(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        return view('admin.layouts.table');
    }
    public function shows(){
        return view('admin.loginadmin');
    }
    public function signin(Request $REQUEST){
        $admin = $REQUEST -> admin;
        $r=session(['admin'=>$admin]);
        $passwords = $REQUEST -> passwords;
        $manguser = DB::select("select admin from Loginadmin where admin=?",[$admin]);
        $mangpassword = DB::select("select passwords from Loginadmin where admin=?",[$admin]);
        
        if(count($manguser)){
            foreach($mangpassword as $check){
                if(Hash::check($passwords,$check->passwords)){
                    return redirect('admin/dashboard');

                }else{
                    $tb = 'Password Incorrect';
                    return redirect('admin')->with('tb',$tb);
                }
            }
        }else{
            $tb = 'User Incorrect';
            return redirect('admin')->with('tb',$tb);
        }
    }
    public function signout(Request $REQUEST){
        $r = session(['admin'=>null]);
        return redirect('/');
    }
    
}
    