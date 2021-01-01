<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Tags;
use App\Postingan;
use App\Team;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function profil()
    {
        return view('admin.profile');
    }
    
    public function list_postingan()
    {
        $postingan = Postingan::all();
        return view('admin.list_postingan',compact('postingan'));
    }
    
    public function trash_postingan()
    {
        return view('admin.trash_postingan');
    }
    
    public function list_category()
    {
        $category = Category::all();
        
        return view('admin.list_category', compact('category'));
    }
    
    public function trash_category()
    {
        return view('admin.trash_category');
    }
    
    public function list_tags()
    {
        $tags = Tags::all();
        return view('admin.list_tags', compact('tags'));
    }
    
    public function team()
    {
        $teams = Team::all();
        return view('admin.team_list', compact('teams'));
    }
    
    public function add_team_post(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:teams|max:255',
            'twitter' => 'required',
            'telegram' => 'required',
            'jobs' => 'required',
            'images' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $file = $request->file('images');
    	$nama_file = time()."_".$file->getClientOriginalName();
    	$tujuan_upload = 'data_file/team';
		$file->move($tujuan_upload,$nama_file);
		
        $team = new Team;
        $team->name = $request->name;
        $team->twitter = $request->twitter;
        $team->telegram = $request->telegram;
        $team->jobs = $request->jobs;
        $team->quote = $request->quote;
        $team->images = $nama_file;
        $team->save();
        
        toastr()->success('Team Baru Di Tambahkan');
        return redirect()->back();
        
    }
    
    public function add_team()
    {
        return view('admin.add_team');
    }

    public function hapus_team($id)
    {
        $team = Team::where('id',$id)->first();
        File::delete('data_file/team'.$team->images);
        DB::table('teams')->where('id',$id)->delete();
        toastr()->success('Team Berhasil Di Hapus');
        return redirect()->back();
    }
}
