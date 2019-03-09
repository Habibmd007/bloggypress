<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bio;
use App\Post;
use App\Info;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.home.blog');
    }

    public function about()
    {
        $bios= Bio::where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->get();

        $posts= Post::where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->get();

        $infs= Info::where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->get();

        return view('frontend.about.aboutpage',compact('bios', 'posts', 'infs'));
    }
    
    public function author()
    {
        return view('frontend.pages.author');
    }
    public function category()
    {
        return view('frontend.pages.category');
    }
    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
