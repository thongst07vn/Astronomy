<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;

class MenuController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function about(Request $REQUEST): View{
        $menu ='about';
        return view('layouts.about',['menu' => $menu]);
    }
    public function map(Request $REQUEST): View{
        $menu ='map';
        return view('layouts.map',['menu' => $menu]);
    }
    public function index(Request $REQUEST): View{
        $menu ='index';
        return view('layouts.index',['menu' => $menu]);
    }
    public function blog(Request $REQUEST): View{
        $blog = DB::Table('blogsum') -> Paginate(3);
        $menu ='blog';
        return view('layouts.blog',['menu' => $menu, 'blog'=>$blog]);
    }
    public function constellation(Request $REQUEST): View{
        $menu ='contellation';
        $constellar = DB::Select('select * from constellar');
        $zodiac = DB::Select('select * from zodiac');
        return view('layouts.constellar',['menu' => $menu,'constellar' => $constellar,'zodiac' => $zodiac ]);
    }
    public function avatar(Request $request){
        $file = $request->file('avatar');
        $fileName = $file->getClientOriginalName();
        $file -> storeAs('avatar1',$fileName);
        $file -> move(public_path('avatar1'), $fileName); 
        $username = session ('username1');
        $avtpath = "avatar1/" . $fileName;
        DB::update(
            'update Loginuser set avatar = ? where username = ?',[$avtpath,$username]
        );
        return redirect('/');
    }
}
