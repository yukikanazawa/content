<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Overview;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Initial $initial)
    {
        return view('user.index')->with(['initials' => $initial->get()]); 
    }
    
    public function initial(Initial $initial)
    {
        $overviews=Initial::find($initial->id)->overviews;
        return view('user.initial')->with(['overviews' => $overviews, 'initial' => $initial]);
    }

    public function short(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $short=$overview->short_body;
        return view('user.short')->with(['short' => $short, 'overview' => $overview, 'initial' => $initial]);  
    }
    
    public function long(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $long=$overview->long_body;
        return view('user.long')->with(['long' => $long, 'overview' => $overview, 'initial' => $initial]);  
    }
}