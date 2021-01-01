<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required',
    	]);
    	
    	
    	$post = new Comment;
    	$post->slug = $request->slug;
    	$post->name = $request->name;
    	$post->message = $request->message;
    	$post->save();
    	
    	toastr()->success('Comments Berhasil !!');
    	return redirect()->back();
    	
    }
}