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

class BlogController extends Controller
{
    
    public function postedit(Request $REQUEST):View{
        return view('layouts.blogdetail');
    }
    public function editor(Request $REQUEST){
        $edit = $REQUEST -> floatingTextarea;
        $contentsql = htmlentities(htmlentities($edit));
            if(Str::contains($edit,'</h1>') == true){
                $headtitle=strtok($edit,'</h1>');
            }else{
                $headtitle='<h1>This Is Title</h1>';
            }
        DB::insert("insert into blogsum(headtitle, content) values (?,?)",[$headtitle,$contentsql]);
        return redirect()->back();
    }
}
