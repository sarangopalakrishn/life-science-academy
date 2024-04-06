<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Video;

class HomepageController extends Controller
{
    public function home(){
        return view('users.home');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function team()
    {
        return view('users.team');
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('created_at')->get()->all();
        return view('users.gallery', ['galleries' => $galleries]);           
    }
    
    public function video()
    {
        $videos = Video::orderBy('created_at')->get()->all();
        return view('users.video', ['videos' => $videos]);  
    }

    public function about()
    {
        return view('users.about');
    }

    public function privacypolicy()
    {
        return view('users.privacy-policy');
    }

    
    public function news()
    {
        return view('users.news');
    }

    public function courses()
    {
        return view('users.courses');
    }

    public function events()
    {
        return view('users.events');
    }

    
  



   


   
}
