<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogCategory;

class BlogCategController extends Controller
{
    public function index()
    {
        $cats= BlogCategory::all();
        return view('admin.blog.blogcat',compact('cats'));
    }

    public function insertblogcate(Request $request)
    {
        $cat= new BlogCategory();
        $cat->cat = $request->cat;
        $cat->save();
        return redirect()->back()->with('msg', 'Category save');
    }

    public function deleteblogcate($id)
    {
        $cat= BlogCategory::find($id);
        $cat->delete();
        return redirect()->back()->with('msg', 'Category deleted');

    }
}
