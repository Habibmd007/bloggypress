<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\BlogPost;
use App\BlogPostGallery;
use Illuminate\Support\Facades\Session;

class BlogFrontController extends Controller
{
    
 
    public function blogPost($id)
    {
        $blogpost= BlogPost::find($id);
        // $blogpost= BlogPost::where('id', $id)->where('status', 1)
        // ->orderBy('id', 'DESC')
        // ->first();
        
        $viewKey=  'view_'.$id;
        if (!Session::has($viewKey)) {
            $blogpost->increment('view');
            Session::put($viewKey, 1);
        }

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();

        return view('frontend.pages.blogpage', compact('views','blogpost', 'bp_youlikes'));
      
       
    }
 
    public function nextOne($id)
    {
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();
        $blogpost= BlogPost::where('id', '>', $id)->where('status', 1)->first();

        $bp_youlikes= BlogPost::where('status', 1)
        ->orderBy('id', 'DESC')
        ->take(3)
        ->get();

        if (isset($blogpost)) {
            return view('frontend.pages.blogpage', compact('views','blogpost', 'bp_youlikes'));
        }else {
            $blogpost= BlogPost::where('id', $id)->where('status', 1)
            ->orderBy('id', 'DESC')
            ->first();

            return view('frontend.pages.blogpage', compact('views','blogpost', 'bp_youlikes'));
        }
       
    }
    
    public function oldOne($id)
    {
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();
        $blogpost= BlogPost::where('id', '<', $id)->where('status', 1)->orderBy('id', 'DESC')->first();

        $bp_youlikes= BlogPost::where('status', 1)
                                ->orderBy('id', 'DESC')
                                ->take(3)
                                ->get();

        if (isset($blogpost)) {
            return view('frontend.pages.blogpage', compact('views','blogpost', 'bp_youlikes'));
        }else {
            $blogpost= BlogPost::where('id', $id)->where('status', 1)
                                ->orderBy('id', 'DESC')
                                ->first();
            return view('frontend.pages.blogpage', compact('views','blogpost', 'bp_youlikes'));
        }
       
    }

    

    public function blogpostNew()
    {
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();

        $all_posts= BlogPost::orderBy('id', 'DESC')->paginate(4);
        return view('frontend.pages.all-blogpost', compact('views','all_posts'));
    }
    public function blogpostOld()
    {
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();

        $all_posts= BlogPost::paginate(4);
        return view('frontend.pages.all-blogpost', compact('views','all_posts'));
    }

   
    
    
}
