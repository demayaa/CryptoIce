<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class FeedbackController extends Controller
{
    public function index()
    {
        $message = Feedback::all();
        return view('admin.message', compact('message'));
    }
    public function send(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required',
            'message' => 'required',
        ]);
        
        $post = new Feedback;
        $post->username = $request->username;
        $post->email = $request->email;
        $post->message = $request->message;
        $post->save();
        
        toastr()->success('Feedback Terkirim ');
        return redirect()->back();
    }
}
