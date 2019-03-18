<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bio;
use App\Post;
use App\Info;
use App\BlogCategory;
use App\BlogPost;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {

        $cats= BlogCategory::orderBy('id', 'DESC')->take(4)->get();
        $featured= BlogPost::where('featured', 1)->first();
        $home_1st= BlogPost::orderBy('id', 'DESC')->first();
        $home_2nds= BlogPost::orderBy('id', 'DESC')->skip(1)->take(2)->get();
        $home_3rds= BlogPost::orderBy('id', 'DESC')->skip(3)->first();
        $home_4ths= BlogPost::orderBy('id', 'DESC')->skip(4)->take(2)->get();
        return view('frontend.home.blog', compact('cats', 'featured', 'feat_cat', 'home_1st','home_2nds', 'home_3rds', 'home_4ths'));
    }
    
    public function postBycat($id)
    {
        $cat_posts= BlogPost::where('cat_id', $id)->paginate(12);
        return view('frontend.pages.category', compact('cat_posts'));
    }

    public function aboutAuthor($id)
    {
        $bio= Bio::find($id);
                    

        $posts= Post::where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->get();

        $infs= Info::where('status', 1)
                    ->orderBy('id', 'DESC')
                    ->get();

        return view('frontend.about.aboutpage',compact('bio', 'posts', 'infs'));
    }
    
    public function author($id)
    {
        $bio= Bio::where('user_id', $id)->first();
        $author_posts= BlogPost::where('user_id', $id)->paginate(10);
        return view('frontend.pages.author', compact('bio', 'author_posts'));
    }

    // public function aboutAuthor($id)
    // {
    //     $bio=  Bio::find($id);
    //     return view('admin.about.bio',compact('bio'));
    // }





    public function category()
    {
        return view('frontend.pages.category');
    }


    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|max:50',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:10|max:1000',
        ]);

        $data= array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'txtmessage' => $request->message,
        );
        Mail::send('admin.email.email', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['name']);
            $message->to('habibmd007@gmail.com', 'Habiiib');
            $message->subject($data['subject']);
           
        });

        return redirect('contact')->with('msg', 'Emai has been send succsessfully');


        
    }
}
