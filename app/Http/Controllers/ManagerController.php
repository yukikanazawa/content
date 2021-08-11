<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Overview;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index(Initial $initial)
    {
        return view('manager.index')->with(['initials' => $initial->get()]);  
    }
    
    public function initial(Initial $initial)
    {
        $overviews=Overview::where('initial_id', $initial->id)->simplepaginate(10);
        return view('manager.initial')->with(['overviews' => $overviews, 'initial' => $initial]);  
    }
    
    public function short(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $short=$overview->short_body;
        $title=$overview->title;
        return view('manager.short')->with(['short' => $short, 'overview' => $overview, 'initial' => $initial]);  
    }
    
    public function long(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $long=$overview->long_body;
        $title=$overview->title;
        return view('manager.long')->with(['long' => $long, 'overview' => $overview, 'initial' => $initial]);  
    }
    
    public function create(Initial $initial)
    {
        return view('manager.create')->with(['initial' => $initial]); 
    }
    
    public function store($initial, Request $request, Overview $overview)
    {
        $input=$request['overview']; 
        $input['initial_id']=$initial;
        //以下によって定義されていないbodyの中を「空」として定義している
        if (empty($input['short_body']) && empty($input['long_body'])){
            $input['short_body']='';
            $input['long_body']='';
        
        } elseif (empty($input['short_body'])){
            $input['short_body']='';
         
        } elseif (empty($input['long_body'])){
            $input['long_body']='';
        }
        $overview->fill($input)->save();
        return redirect('/manager/initials/'.$initial);
    }
    
    public function edit(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        return view('manager.edit')->with(['overview' => $overview, 'initial' => $initial]);
    }
    
    public function update($initial, Request $request, Overview $overview)
    {
        $overview_id=$request['overview_id'];
        $overview=Overview::where('id', $overview_id)->first();
        $input=$request['overview'];
        //以下によって定義されていないbodyの中を「空」として定義している
        if (empty($input['short_body']) && empty($input['long_body'])){
                
            $input['short_body']='';
            $input['long_body']='';
        } elseif (empty($input['short_body'])){
            
            $input['short_body']='';
        } elseif (empty($input['long_body'])){
            
            $input['long_body']='';
        }
        
        $overview->fill($input)->save();
        return redirect('/manager/initials/'.$initial);
    }
    
    public function destroy(Request $request, Overview $overview, $initial)
    {
        $overview_id=$request['overview_id'];
        $overview=Overview::where('id', $overview_id)->first();
        $overview->delete();
        return redirect('/manager/initials/'.$initial);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}