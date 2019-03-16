<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogPost;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query= $request->input('search');
        $search_res= BlogPost::where('head', 'LIKE', "%$query%")->where('status', 1)->paginate(10);
        return view('frontend.pages.search', compact('search_res', 'query'));
    }
}
