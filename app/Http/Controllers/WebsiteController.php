<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class WebsiteController extends Controller
{
    public function about()
    {
        return view('website.about');
    }
    
    public function contact()
    {
        return view('website.contact');
    }
    
    public function team()
    {
        $teams = Team::all();
        return view('website.team', compact('teams'));
    }
}
