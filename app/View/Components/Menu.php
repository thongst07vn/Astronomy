<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $menu)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $username = session ('username1');
        $avt = "";
        $avatar = DB::select("select avatar from Loginuser where username =?",[$username]);
        foreach($avatar as $check){
            $avt = $check -> avatar;
        }
        return view('components.menu',['avt'=>$avt]);
    }

}
