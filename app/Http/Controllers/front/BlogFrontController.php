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
        $blogpost= BlogPost::where('id', $id)->where('status', 1)
        ->orderBy('id', 'DESC')
        ->first();

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();

        return view('frontend.pages.blogpage', compact('blogpost', 'bp_youlikes'));
      
       
    }
 
    public function nextOne($id)
    {
        $blogpost= BlogPost::where('id', '>', $id)->where('status', 1)->first();

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();

        if (isset($blogpost)) {
            return view('frontend.pages.blogpage', compact('blogpost', 'bp_youlikes'));
        }else {
            $blogpost= BlogPost::where('id', $id)->where('status', 1)
            ->orderBy('id', 'DESC')
            ->first();

            return view('frontend.pages.blogpage', compact('blogpost', 'bp_youlikes'));
        }
       
    }
    
    public function oldOne($id)
    {
        
        $blogpost= BlogPost::where('id', '<', $id)->where('status', 1)->orderBy('id', 'DESC')->first();

        $bp_youlikes= BlogPost::where('status', 1)
                                ->orderBy('id', 'DESC')
                                ->take(3)
                                ->get();

        if (isset($blogpost)) {
            return view('frontend.pages.blogpage', compact('blogpost', 'bp_youlikes'));
        }else {
            $blogpost= BlogPost::where('id', $id)->where('status', 1)
                                ->orderBy('id', 'DESC')
                                ->first();
            return view('frontend.pages.blogpage', compact('blogpost', 'bp_youlikes'));
        }
       
    }

    

    public function blogpostNew()
    {
        $all_posts= BlogPost::orderBy('id', 'DESC')->paginate(4);
        return view('frontend.pages.all-blogpost', compact('all_posts'));
    }
    public function blogpostOld()
    {
        $all_posts= BlogPost::paginate(4);
        return view('frontend.pages.all-blogpost', compact('all_posts'));
    }

   
    
    
}
