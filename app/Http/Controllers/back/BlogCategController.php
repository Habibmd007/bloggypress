<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogCategory;
use App\Bio;

class BlogCategController extends Controller
{
    public function index()
    {
        $cats= BlogCategory::all()->sortByDesc('id');
        return view('admin.blog.blogcat',compact('cats'));
    }

    public function insertblogcate(Request $request)
    {
        $cat= new BlogCategory();
        $save_img = new Bio();
        $img_url= $save_img->imgfinal($request);
        $cat->img = $img_url;
        $cat->disc = $request->disc;
        $cat->cat = $request->cat;
        $cat->save();
        return redirect()->back()->with('msg', 'Category save');
    }

    public function deleteblogcate($id)
    {
        $cat= BlogCategory::find($id);
        if (file_exists($cat->img)) {
            unlink($cat->img);
        }
        $cat->delete();
        return redirect()->back()->with('msg', 'Category deleted');

    }
}
