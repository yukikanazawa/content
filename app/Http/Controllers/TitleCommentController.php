<?php

namespace App\Http\Controllers;

use App\Initial;
use App\Overview;
use App\Comment;
use Illuminate\Http\Request;

class TitleCommentController extends Controller
{
    public function showuser(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $comments=Overview::find($overview_id)->comments;
        return view('user.show')->with(['overview' => $overview, 'comments' => $comments, 'initial' => $initial]);  
        
    }
    
    public function showmanager(Initial $initial, $overview_id)
    {
        $overview=Overview::where('id', $overview_id)->first();
        $comments=Overview::find($overview_id)->comments;
        return view('manager.show')->with(['overview' => $overview, 'comments' => $comments, 'initial' => $initial]);  
        
    }
    
    public function store($initial, $overview_id, Request $request, Comment $comment)
    {
        $input=$request['comment']; 
        $input['overview_id']=$overview_id;
        $comment->fill($input)->save();
        return back();
    }
    
    public function delete(Request $request, Comment $comment, $initial)
    {
        $comment_id=$request['comment_id'];
        $comment=Comment::where('id', $comment_id)->first();
        $comment->delete();
        return back();
    }
}
