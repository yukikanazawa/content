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
    
    public function show(Initial $initial)
    {
        $overviews=Initial::find($initial->id)->overviews;
        return view('content.show')->with(['overviews' => $overviews, 'initial' => $initial]);  
    }
    
    public function short(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $short=$overview->short_body;
        $title=$overview->title;
        return view('content.short')->with(['short' => $short, 'title' => $title, 'initial' => $initial]);  
    }
    
    public function long(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $long=$overview->long_body;
        $title=$overview->title;
        return view('content.long')->with(['long' => $long, 'title' => $title, 'initial' => $initial]);  
    }
}