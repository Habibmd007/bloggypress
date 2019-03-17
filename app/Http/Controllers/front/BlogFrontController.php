<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\BlogPost;
use App\BlogPostGallery;

class BlogFrontController extends Controller
{
    
 
    public function blogPost($id)
    {
        $blogposts= BlogPost::where('id', $id)->where('status', 1)
        ->orderBy('id', 'DESC')
        ->paginate(1);

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();


       
        return view('frontend.pages.blogpage', compact('blogposts', 'bp_youlikes'));
    }

    public function blogpostNew()
    {
        $all_posts= BlogPost::orderBy('id', 'DESC')->paginate(10);
        return view('frontend.pages.all-blogpost', compact('all_posts'));
    }
    public function blogpostOld()
    {
        $all_posts= BlogPost::paginate(10);
        return view('frontend.pages.all-blogpost', compact('all_posts'));
    }

   
    
    
}
