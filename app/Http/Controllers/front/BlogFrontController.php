<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class BlogFrontController extends Controller
{
    public function blogpages()
    {
        $sliders= Slider::where('status', 1)->get();
        return view('frontend.pages.blogpage', compact('sliders'));
    }
    public function Slider()
    {
        return view();
    }
}
