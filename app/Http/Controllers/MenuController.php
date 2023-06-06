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
    public function signup(Request $REQUEST): View{
        
        return view('signup');
    }
    public function shop(Request $REQUEST): View{
        
        return view('shop');
    }
    public function shop2(Request $REQUEST): View{
        
        return view('shop2');
    }


}