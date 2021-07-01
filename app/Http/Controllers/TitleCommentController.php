<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Overview;
use App\User;
use Illuminate\Http\Request;

class TitleCommentController extends Controller
{
    public function show(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $comments=Overview::find($overview_id)->comments;
        return view('content.show')->with(['overview' => $overview, 'comments' => $comments, 'initial' => $initial]);  
        
    }
    
    public function store($initial, Request $request, Overview $overview)
    {
        $input=$request['overview']; 
        $input['initial_id']=$initial;
        $overview->fill($input)->save();
        return redirect('/manager/initials/'.$initial);
    }
}
