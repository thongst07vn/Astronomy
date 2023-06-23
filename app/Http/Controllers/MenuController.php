<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;

class MenuController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function about(Request $REQUEST): View{
        $menu ='about';
        return view('layouts.about',['menu' => $menu]);
    }
    public function index(Request $REQUEST): View{

        $menu ='index';
        return view('layouts.index',['menu' => $menu]);
    }
    public function blog(Request $REQUEST): View{
        $blog = DB::Select('select * from blogsum');
        $menu ='blog';
        return view('layouts.blog',['menu' => $menu,'blog'=>$blog]);
    }
    public function constellar(Request $REQUEST): View{
        $zodiac = DB::select('select * from zodiac');
        $constellation = DB::select('select * from constellar');
        $menu ='constellation';
        return view('layouts.constellar',['menu' => $menu,'zodiac' => $zodiac,'constellation' => $constellation]);
    }
}
