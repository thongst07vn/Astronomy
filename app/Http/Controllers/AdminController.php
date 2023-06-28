<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function showtb(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        $user = DB::select('select id,username,avatar from Loginuser');
        $blog = DB::select('select * from blogsum');
        return view('admin.layouts.table',['user'=>$user,'blog'=>$blog]);
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
                    return redirect('admin/table');

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
    public function update(Request $REQUEST, int $id){
        $update = $REQUEST -> floatingTextarea;
        $contentsql = htmlentities($update);
        $rawcontent = str_replace("\r\n"," ",strip_tags(html_entity_decode(substr(strstr($contentsql,htmlentities('</h1>')),11))));
        if(Str::contains($update,'</h1>') == true){
            $headtitleupdate=strip_tags((strstr($update,'</h1>', true)."</h1>"), 'h1');
        }else{
            $headtitleupdate='<h1>This Is Title</h1>';
        }
        $file = $REQUEST->file('imgtitle');

        if($file == ""){
            $edits = DB::Select('select imgtitle from blogsum where id = ?',[$id]);
            foreach($edits as $i){
                $imgtitle = $i->imgtitle;
            }
        } else {
            $fileName = $file->getClientOriginalName();
            $file -> storeAs('public/imgtitle',$fileName);
            $imgtitle = "storage/imgtitle/" . $fileName;
        }
        DB::update("update blogsum set headtitle =? where id=?",[$headtitleupdate,$id]);
        DB::update("update blogsum set content = ? where id=?",[$rawcontent,$id]);
        DB::update("update blogsum set imgtitle = ? where id=?",[$imgtitle,$id]);
        return redirect('admin/table');
    }
    public function delete(int $id){
        $blog = DB::select('select * from blogsum');
        $user = DB::select('select username,avatar from Loginuser');
        return view('admin.layouts.delete',['user'=>$user,'blog'=>$blog]);
    }
    public function deleted(int $id){
        DB::delete('delete from blogsum where id = ?',[$id]);
        return redirect('admin/table');
    }
}
    