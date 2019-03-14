<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bio;
use App\Post;
use App\Info;
use App\BlogCategory;
use App\BlogPost;

class FrontController extends Controller
{
    public function index()
    {
        $cats= BlogCategory::orderBy('id', 'DESC')->take(4)->get();
        $featured= BlogPost::where('featured', 1)->first();
        $feat_cat= BlogCategory::where('id',$featured->cat_id)->first();
        return view('frontend.home.blog', compact('cats', 'featured', 'feat_cat'));
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
