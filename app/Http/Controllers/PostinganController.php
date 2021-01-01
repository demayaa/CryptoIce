<?php

namespace App\Http\Controllers;

use App\Postingan;
use App\Category;
use App\Tags;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use File;
use App\Comment;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $tags = Tags::all();
        return view('admin.add_postingan', compact('category', 'tags'));
    }
    
    public function welcome()
    {
        $postingan = Postingan::paginate(10);
        return view('welcome', compact('postingan'));
    }
    
    public function posts($slug)
    {
        $postingan = Postingan::where('slug',$slug)->first();
        
        return view('blog.posts', compact('postingan'));
    }
    
    public function category($category)
    {
        $postingan = Postingan::where('category',$category)->paginate(10);
        //dd($postingan);
        return view('blog.category', compact('postingan'));
    }
    
    
    public function add_postingan(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'content' => 'required',
    		'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
    		'author' => 'required',
    	]);
    	
    	$file = $request->file('img');
    	$nama_file = time()."_".$file->getClientOriginalName();
    	$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
    	
    	$post = new Postingan;
    	$post->title = $request->title;
    	$post->slug = Str::slug($request->title, '-');
    	$post->category = $request->category;
    	$post->tags = implode(",",$request->tags);
    	$post->content = $request->content;
    	$post->img = $nama_file;
    	$post->author = $request->author;
    	//dd($post);
    	$post->save();
    	
    	$status = new Status;
    	$status->slug = $post->slug;
    	$status->save();
    	
    	toastr()->success('Content Berhasil Di Tambahkan');
    	return redirect()->back();
    }
    
    public function hapus($id)
    {
        $post = Postingan::where('id',$id)->first();
        File::delete('data_file/'.$post->img);
        
        DB::table('postingans')->where('id',$id)->delete();
        
        toastr()->success('Content Berhasil Di Hapus');
        return redirect()->back();
    }
    
    public function loadData(Request $request)
    {
    	if ($request->has('q')) {
    		$cari = $request->q;
    		$data = DB::table('postingans')->select('id', 'title')->where('title', 'LIKE', '%$cari%')->get();
    		return response()->json($data);
    	}
    }
    
}
