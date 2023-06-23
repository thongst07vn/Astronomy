<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ConstellarController extends Controller
{
    // public function editor(Request $REQUEST){
        
    // }
    // public function detail(string $id): View{
    //     $blog = DB::Select('select * from blogsum');
    //     $menu ='blog';
    //     return view('layouts.blogdetail',['menu' => $menu, 'blog'=>$blog, 'id' =>$id]);
    // }
}