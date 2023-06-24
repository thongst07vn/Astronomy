<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function checkadmin(){
        $r = session('admin');
        if($r==null){
            $tb = 'Please Login To Use This Fearture';
            return false;
        }else{
            return true;
        }
    }
    
}
