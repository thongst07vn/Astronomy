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
    // show table
    public function showtb(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        $user = DB::select('select id,username,avatar from Loginuser');
        $blog = DB::select('select * from blogsum');
        $observatory = DB::Select('select * from observatory');
        return view('admin.layouts.table',['user'=>$user,'blog'=>$blog,'observatory'=>$observatory]);
    }
    //show form constellation
    public function showfc(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        return view('admin.layouts.formconstellar',[]);
    }
    //show observatory
    public function showo(){
        if(!$this->checkadmin()){
            $tb = 'Please Login To Use This Fearture';
            return redirect('admin')->with('tb',$tb);
        }
        return view('admin.layouts.observatory',[]);
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
        $summary = str_replace("\n","",str_replace("\r\n","",strip_tags(html_entity_decode(substr(strstr($contentsql,htmlentities('</h1>')),11)))));
        while(strpos($summary,'  ') === true){
            str_replace('  ',' ',$sumary);
        }
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
        DB::update("update blogsum set content = ? where id=?",[substr(strstr($contentsql,htmlentities('</h1>')),11),$id]);
        DB::update("update blogsum set imgtitle = ? where id=?",[$imgtitle,$id]);
        DB::update("update blogsum set summary = ? where id=?",[$summary,$id]);
        return redirect('admin/table');
    }
    public function edito(Request $REQUEST, int $id){
        $edito = DB::Select('select * from observatory where id = ?',[$id]);
        return view('admin.layouts.observatoryupdate',['edito'=>$edito]);
    }
    public function obedit(Request $REQUEST){
        $nameo = $REQUEST -> nameo;
        $instruments = $REQUEST -> instruments;
        $altitude = $REQUEST -> altitude;
        $type = $REQUEST -> type;
        $description = $REQUEST -> description;
        $lat = $REQUEST -> lat;
        $lng = $REQUEST -> lng;
        DB::insert("insert into observatory(name, instruments, altitude, type, description, lat, lng) values (?,?,?,?)",[$nameo, $instruments, $altitude, $type, $description, $lat, $lng]);
        return back();
    }
    public function updateo(Request $REQUEST, int $id){
        $nameo = $REQUEST -> nameo;
        $instruments = $REQUEST -> instruments;
        $altitude = $REQUEST -> altitude;
        $type = $REQUEST -> type;
        $description = $REQUEST -> description;
        $lat = $REQUEST -> lat;
        $lng = $REQUEST -> lng;
        DB::update("update observatory set name = ? where id=?",[$nameo,$id]);
        DB::update("update observatory set instruments = ? where id=?",[$instruments,$id]);
        DB::update("update observatory set altitude = ? where id=?",[$altitude,$id]);
        DB::update("update observatory set type = ? where id=?",[$type,$id]);
        DB::update("update observatory set description = ? where id=?",[$description,$id]);
        DB::update("update observatory set lat = ? where id=?",[$lat,$id]);
        DB::update("update observatory set lng = ? where id=?",[$lng,$id]);
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
    