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
class AdminController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(): View{
        return view('admin.layouts.dashboard');
    }
    public function showtb(): View{
        return view('admin.layouts.table');
    }
    public function showf(): View{
        return view('admin.layouts.form');
    }
    public function shows(): View{
        return view('admin.loginadmin');
    }
    public function signin(Request $REQUEST){
        $admin = $REQUEST -> admin;
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
        $r = $REQUEST->session()->flush();
        return redirect('login');
    }
}
    