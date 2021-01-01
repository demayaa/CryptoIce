<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('admin.add_category');
    }
    
    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories|max:255',
        ]);
        $post = new Category;
        $post->category = $request->category;
        $post->slug = Str::slug($request->category, '-');
        $post->save();
        
        
        toastr()->success('Category Berhasil Di Tambahkan');
        return redirect()->back();
        
    }
    
    public function hapus($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        toastr()->success('Category Berhasil Di Hapus');
        return redirect()->back();
    }
    
    
}
