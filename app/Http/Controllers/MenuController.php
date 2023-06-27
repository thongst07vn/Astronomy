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
    protected $menu;
    public function about(Request $REQUEST): View{
        $this->menu ='about';
        return view('layouts.about',['menu' => $this->menu]);
    }
    public function index(Request $REQUEST): View{
        $this->menu ='index';
        return view('layouts.index',['menu' => $this->menu]);
    }
    public function blog(Request $REQUEST): View{
        $blog = DB::Table('blogsum') -> Paginate(3);
        $this->menu ='blog';
        return view('layouts.blog',['menu' => $this->menu, 'blog'=>$blog]);
    }
    public function constellation(Request $REQUEST): View{
        $this->menu ='constellation';
        $constellar = DB::Select('select * from constellar');
        $zodiac = DB::Select('select * from zodiac');
        return view('layouts.constellar',['menu' => $this->menu,'constellar' => $constellar,'zodiac' => $zodiac ]);
    }
    public function planet(Request $REQUEST): View{
        $this->menu ='planet';
        return view('layouts.planet',['menu' => $this->menu]);
    }
    public function observatory(Request $REQUEST): View{
        $this->menu ='observatory';
        return view('layouts.observatory',['menu' => $this->menu]);
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
