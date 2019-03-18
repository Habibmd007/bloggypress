<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Title;
use App\Bio;

class TitleController extends Controller
{
   
    public function title()
    {
        $title= Title::orderBy('id', 'DESC')->first();
        return view('admin.title.title', compact('title'));
    }

    public function insertTitle(Request $request)
    {
        $title= Title::orderBy('id', 'DESC')->first();
        if (!empty($title->title)) {
            $title->title = "";
        }

        $title= Title::find($title->id);
        $title->title = $request->title;
        $title->save();
        return redirect()->back()->with('msg', 'Title saved successfully');
    }



    
    public function insertSub(Request $request)
    {
        $title= Title::orderBy('id', 'DESC')->first();
        if (!empty($title->sub)) {
            $title->sub = "";
        }

        $title= Title::find($title->id);
        $title->sub = $request->sub;
        $title->save();
        return redirect()->back()->with('msg', 'Sub Title saved successfully');
    }
    
    
    
    public function insertLogo(Request $request)
    {
        $title= Title::orderBy('id', 'DESC')->first();
        if (!empty($title->img)) {
            unlink($title->img);
            $title->img = "";
        }

        $title= Title::find($title->id);
        $img_save= new Bio();
        $img_url = $img_save->imgfinal($request);
        $title->img = $img_url;
        $title->save();
        return redirect()->back()->with('msg', 'Logo saved successfully');
    }
   
    public function insertFavicon(Request $request)
    {
        $this->validate($request, [
            'img' => 'required|mimes:png,ico|max:1024',
        ]);

        $title= Title::orderBy('id', 'DESC')->first();
        if (!empty($title->favicon)) {
            unlink($title->favicon);
            $title->favicon = "";
        }

        $title= Title::find($title->id);
        $img_save= new Bio();
        $img_url = $img_save->imgfinal($request);
        $title->favicon = $img_url;
        $title->save();
        return redirect()->back()->with('msg', 'Favicon saved successfully');
    }
}
