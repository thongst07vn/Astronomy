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
    protected $headtitle;
    protected $content;
    public function showf(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        $this->headtitle='Insert Head Title';
        $this->content='<p>This Is Your Content</p>';
        return view('admin.layouts.form',['headtitle'=>$this->headtitle,'content'=>$this->content]);
    }
    public function editor(Request $REQUEST){
        $edit = $REQUEST -> floatingTextarea;
        $contentsql = htmlentities($edit);
        if(Str::contains($edit,'</h1>') == true){
            $headtitle=strip_tags((strstr($edit,'</h1>', true)."</h1>"), 'h1');
        }else{
            $headtitle='<h1>This Is Title</h1>';
        }
        $file = $REQUEST->file('imgtitle');
        $imgtitle = "storage/imgtitle/noimg.jpg";
        if($file == ""){
            $imgtitle = "storage/imgtitle/noimg.jpg";
        } else {
            $fileName = $file->getClientOriginalName();
            $file -> storeAs('public/imgtitle',$fileName);
            $imgtitle = "storage/imgtitle/" . $fileName;
        }
        DB::insert("insert into blogsum(headtitle, content, imgtitle) values (?,?,?)",[$headtitle,substr(strstr($contentsql,htmlentities('</h1>')),11),$imgtitle]);
        return back();
    }
    public function post(int $id): View{
        $post = DB::Select('select * from blogsum where id = ?',[$id]);
        // dd($post);
        $menu ='blog';
        return view('layouts.post',['menu' => $menu, 'post'=>$post]);
    }
    public function delete(){   
        
    }
    public function edit(Request $REQUEST,int $id):View{
        $edits = DB::Select('select * from blogsum where id = ?',[$id]);
        foreach($edits as $i){
            $this->headtitle = $i->headtitle;
            $this->content = $i->content;
            $imgtitle = $i->imgtitle;
        }
        return view('admin.layouts.update',['headtitle'=>$this->headtitle,'content'=>$this->content,'imgtitle'=>$imgtitle]);
    }
    
}