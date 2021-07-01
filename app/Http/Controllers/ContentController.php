<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Overview;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(Initial $initial)
    {
        return view('content.index')->with(['initials' => $initial->get()]); 
    }
    
    public function initial(Initial $initial)
    {
        $overviews=Initial::find($initial->id)->overviews;
        return view('content.initial')->with(['overviews' => $overviews, 'initial' => $initial]);
    }

    public function short(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $short=$overview->short_body;
        return view('content.short')->with(['short' => $short, 'overview' => $overview, 'initial' => $initial]);  
    }
    
    public function long(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $long=$overview->long_body;
        return view('content.long')->with(['long' => $long, 'overview' => $overview, 'initial' => $initial]);  
    }
}