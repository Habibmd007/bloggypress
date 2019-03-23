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
use Newsletter;

class FrontController extends Controller
{
    public function index()
    {   
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();
        $cats= BlogCategory::orderBy('id', 'DESC')->take(4)->get();
        $featured= BlogPost::where('featured', 1)->where('status', 1)->first();
        $home_1st= BlogPost::where('status', 1)->orderBy('id', 'DESC')->first();
        $home_2nds= BlogPost::where('status', 1)->orderBy('id', 'DESC')->skip(1)->take(2)->get();
        $home_3rds= BlogPost::where('status', 1)->orderBy('id', 'DESC')->skip(3)->first();
        $home_4ths= BlogPost::where('status', 1)->orderBy('id', 'DESC')->skip(4)->take(2)->get();
        return view('frontend.home.blog', compact('views','cats', 'featured', 'feat_cat', 'home_1st','home_2nds', 'home_3rds', 'home_4ths'));
    }
    
    public function postBycat($id)
    {
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();
        $cat_posts= BlogPost::where('cat_id', $id)->paginate(12);
        return view('frontend.pages.category', compact('views','cat_posts'));
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
        $views= BlogPost::where('status', 1)->orderBy('view', 'desc')->take(3)->get();
        
        $bio= Bio::where('user_id', $id)->first();
        $author_posts= BlogPost::where('user_id', $id)->paginate(10);
        return view('frontend.pages.author', compact('views','bio', 'author_posts'));
    }





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


    public function newsletter(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribePending($request->user_email);
            return redirect()->back()->with('msg', 'Please verify your email to Subscribe');
        }
        return redirect()->back()->with('msg', 'You all ready subscribed');
    }
}
