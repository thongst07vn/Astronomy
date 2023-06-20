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

class BlogController extends Controller
{
    
    public function showf(): View{
        return view('admin.layouts.form');
    }
    public function create(Request $REQUEST){
        $edit = $REQUEST -> floatingTextarea;
        $contentsql = htmlentities($edit);
            if(Str::contains($edit,'</h1>') == true){
                $content=trim(strstr(htmlentities($edit),htmlentities('</h1>')),'</h1>');
                $headtitle=strtok($edit,'</h1>');
                var_dump($headtitle);
                var_dump($content);
            }else{
                $headtitle='<h1>This Is Title</h1>';
            }
        // DB::insert("insert into blogsum(headtitle, content) values (?,?)",[$headtitle,$contentsql]);
        // return redirect('admin/form');
    }
}
