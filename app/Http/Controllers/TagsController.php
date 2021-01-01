<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    public function index()
    {
        return view('admin.add_tags');
    }
    
    public function add_tags(Request $request)
    {
        $request->validate([
            'tags' => 'required|unique:tags|max:255',
        ]);
        $post = new Tags;
        $post->tags = $request->tags;
        $post->slug = Str::slug($request->tags, '-');
        $post->save();
        
        toastr()->success('Tags Berhasil Di Tambahkan');
        return redirect()->back();
    }
    
    public function hapus($id)
    {
        DB::table('tags')->where('id',$id)->delete();
        toastr()->success('Tags Berhasil Di Hapus');
        return redirect()->back();
    }
}
