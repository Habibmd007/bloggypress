<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Bio;

class BlogController extends Controller
{
    // =====================slider function start===============
    public function slider()
    {
        $sliders= Slider::orderBy('id', 'desc')
                    ->get();
        return view('admin.blog.slider',compact('sliders'));
    }
    public function addslider()
    {
        return view('admin.blog.slider-add');
    }
    public function editslider($id)
    {
        $slider= Slider::find($id);
        $slider->status = $slider->status==1 ? 0:1;
        $slider->save();
        return redirect('slider')->with('msg', 'slider Updated succsessfully');

    }
    public function deleteslider($id)
    {
        $slider = Slider::find($id);
        unlink($slider->img);
        $slider->delete();
        return redirect('slider')->with('msg', 'slider Deleted succsessfully');
    }
    
    public function insertslider(Request $request)
    {
        // return $request;
        $bio= new Bio();
        $slider = new Slider();
        $imgurl =$bio->imgfinal($request);

        $slider->img = $imgurl;
        $slider->head = $request->head;
        $slider->status = $request->status;
        $slider->save();
        return redirect('slider')->with('msg', 'Slider saved succsessfully');
    }

    
// =====================slider function end ===============
}
