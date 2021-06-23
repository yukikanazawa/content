<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Title;
use App\Short;
use App\Long;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(Initial $initial)
    {
        return view('user.index')->with(['initials' => $initial->get()]);  
    }
    
    public function show(Title $title, Initial $initial)
    {
        $id_initial=$initial->id;
        $initial_initial=$initial->initial;
        $titles=Initial::find($id_initial)->titles;
        return view('user.show')->with(['titles' => $titles, 'initial' => $initial_initial, 'id_initial' => $id_initial]);  
    }
    
    public function short(Initial $initial, $title_id)
    {
        $id_initial=$initial->id;
        $short=Title::find($title_id)->Short;
        $short_id=optional($short)->id;
        $title=optional(optional(Short::find($short_id))->title)->title;
        return view('user.short')->with(['short' => $short, 'title' => $title, 'id_initial' => $id_initial]);  
    }
    
    public function long(Initial $initial, $title_id)
    {
        $id_initial=$initial->id;
        $long=Title::find($title_id)->long;
        $long_id=optional($long)->id;
        $title=optional(optional(Long::find($long_id))->title)->title;
        return view('user.long')->with(['long' => $long, 'title' => $title, 'id_initial' => $id_initial]);  
    }
}