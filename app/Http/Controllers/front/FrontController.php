<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('frontend.home.blog');
    }

    public function about()
    {
        return view('frontend.about.aboutpage');
    }
    public function blogpages()
    {
        return view('frontend.pages.blogpage');
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
