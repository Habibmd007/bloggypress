<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\BlogPost;
use App\BlogPostGallery;

class BlogFrontController extends Controller
{
    public function blogpages()
    {
        $blogposts= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->paginate(1);

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();

       
        // $blogpost = BlogPost::find( $blogpost->id);
        return view('frontend.pages.blogpage', compact('blogposts', 'bp_youlikes'));
    }
 
    public function blogPost($id)
    {
        $blogposts= BlogPost::where('id', $id)->where('status', 1)
        ->orderBy('id', 'DESC')
        ->paginate(1);

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();

       
        // $blogpost = BlogPost::find( $blogpost->id);
        return view('frontend.pages.blogpage', compact('blogposts', 'bp_youlikes'));
    }

   
    
    
}
