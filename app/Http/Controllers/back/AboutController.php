<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bio;
use App\Post;
use App\Info;

class AboutController extends Controller
{
// ================== Bio function start================

    public function index()
    {
        $bios=  Bio::orderBy('id', 'desc')
                    ->get();
        return view('admin.about.bio',compact('bios'));
    }
    
    public function addBio()
    {
        return view('admin.about.add-bio');
    }

    public function editBio($id)
    {
        $bio = Bio::find($id);
        return view('admin.about.edit-bio', compact('bio'));
    }

    public function deleteBio($id)
    {
        $bio = Bio::find($id);
        $bio->delete();
        return redirect('about-bio')->with('msg', 'Bio Deleted succsessfully');
    }
    
    public function insertBio(Request $request)
    {
        $bio = new Bio();
        $imgurl =$bio->imgfinal($request);
        $bio->name = $request->name;
        $bio->desig = $request->desig;
        $bio->text = $request->text;
        $bio->status = $request->status;
        $bio->img = $imgurl;
        $bio->save();
        return redirect('about-bio')->with('msg', 'Bio saved succsessfully');
    }
    public function updateBio(Request $request)
    {
        $bio =  Bio::find($request->id);

        $imgurl =$bio->imgfinalUpdate($request, $bio);
        $bio->name = $request->name;
        $bio->desig = $request->desig;
        $bio->text = $request->text;
        $bio->status = $request->status;
        $bio->img = $imgurl;
        $bio->save();
        return redirect('about-bio')->with('msg', 'Bio Updated succsessfully');
    }
// ================== Bio function end================






// =====================Post function start===============
    public function Posts()
    {
        $posts= Post::orderBy('id', 'desc')
                    ->get();
        return view('admin.about.post',compact('posts'));
    }
    public function addPosts()
    {
        return view('admin.about.post-add');
    }
    public function editPosts($id)
    {
        $post= Post::find($id);
        return view('admin.about.edit-post',compact('post'));
    }
    public function deletePosts($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('about-posts')->with('msg', 'Post Deleted succsessfully');
    }
    
    public function insertPosts(Request $request)
    {
        // return $request;
        $Post = new Post();
        $Post->head = $request->head;
        $Post->text = $request->text;
        $Post->qoute = $request->qoute;
        $Post->video = $request->video;
        $Post->status = $request->status;
        $Post->save();
        return redirect('about-posts')->with('msg', 'Post saved succsessfully');
    }

    public function updatePosts(Request $request)
    {
        $Post =  Post::find($request->id);

        $Post->head = $request->head;
        $Post->text = $request->text;
        $Post->qoute = $request->qoute;
        $Post->video = $request->video;
        $Post->status = $request->status;
        $Post->save();
        return redirect('about-posts')->with('msg', 'Post Updated succsessfully');
    }
// =====================Post function end ===============





// =====================Info function start===============
    public function Info()
    {
        $infos= Info::orderBy('id', 'desc')
                    ->get();
        return view('admin.about.info',compact('infos'));
    }
    public function addinfo()
    {
        return view('admin.about.info-add');
    }
    public function editinfo($id)
    {
        $info= info::find($id);
        return view('admin.about.edit-info',compact('info'));
    }
    public function deleteinfo($id)
    {
        $info = info::find($id);
        $info->delete();
        return redirect('about-info')->with('msg', 'info Deleted succsessfully');
    }
    
    public function insertinfo(Request $request)
    {
        // return $request;
        $info = new Info();
        $info->font = $request->font;
        $info->head = $request->head;
        $info->text = $request->text;
        $info->status = $request->status;
        $info->save();
        return redirect('about-info')->with('msg', 'info saved succsessfully');
    }

    public function updateinfo(Request $request)
    {
        $info =  Info::find($request->id);

        $info->font = $request->font;
        $info->head = $request->head;
        $info->text = $request->text;
        $info->status = $request->status;
        $info->save();
        return redirect('about-info')->with('msg', 'Info Updated succsessfully');
    }
// =====================Info function end ===============

}
