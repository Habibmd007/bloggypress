<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Bio;
use App\Photo;
use App\BlogPost;
use App\Post;
use App\BlogPostGallery;
use App\BlogCategory;
use App\Tag;
use App\BlogPosTag;

class BlogController extends Controller
{


    // ===================== gallery photo function start===============
    public function glphoto()
    {
        $glphotos= BlogPostGallery::orderBy('id', 'desc')
                    ->get();
        return view('admin.blog.glphotos',compact('glphotos'));
    }

    public function addglphoto($id)
    {   $post_id= $id;
        return view('admin.blog.add-glphoto',compact('post_id'));
    }

    public function editglphoto($id)
    {
        $glphoto= BlogPostGallery::find($id);
        $glphoto->status = $glphoto->status==1 ? 0:1;
        $glphoto->save();
        return redirect('glphoto')->with('msg', 'Gallery Photo Updated succsessfully');

    }
    public function deleteglphoto($id)
    {
        $glphoto = BlogPostGallery::find($id);
        unlink($glphoto->img);
        $glphoto->delete();
        return redirect('glphoto')->with('msg', 'Photo Deleted succsessfully');
    }

    public function insertglphoto(Request $request)
    {
        // return $request;
        if ($request->hasFile('img')) {
            $images= $request->file('img');
            foreach ($images as  $image) {
                $imageFileType = $image->getClientOriginalExtension();
                $imageName = "post".'-'.uniqid().'-'.'.'.$imageFileType;
                $image->move('images/', $imageName);
                $imageUrl = 'images/' . $imageName;
                $glphoto = new BlogPostGallery();
                $glphoto->blogpost_id = $request->post_id;
                $glphoto->img = $imageUrl;
                $glphoto->status = $request->status;
                $glphoto->save();               
        }
        return redirect('blog-singlepost/'.$request->post_id)->with('msg', 'All gallery photos saved succsessfully');
    }
    return redirect('blog-singlepost',['id'=>$request->post_id])->with('msg', 'Error: photos not saved ');
    }













    // ===================== Photos function start===============
    public function photos()
    {
        $photos= Photo::orderBy('id', 'desc')
                    ->get();
        return view('admin.blog.photos',compact('photos'));
    }

    public function addPhoto()
    {
        return view('admin.blog.photo-add');
    }

    public function editPhoto($id)
    {
        $photo= Photo::find($id);
        $photo->status = $photo->status==1 ? 0:1;
        $photo->save();
        return redirect('photos')->with('msg', 'Photo Updated succsessfully');

    }
    public function deletePhoto($id)
    {
        $photo = Photo::find($id);
        unlink($photo->img);
        $photo->delete();
        return redirect('photos')->with('msg', 'Photo Deleted succsessfully');
    }

    public function insertPhoto(Request $request)
    {
        // return $request;
        if ($request->hasFile('img')) {
            $images= $request->file('img');
            foreach ($images as  $image) {
                // return print_r($image);
                $imageFileType = $image->getClientOriginalExtension();
                $imageName = "post".'-'.uniqid().'-'.'.'.$imageFileType;

                // $directory = 'thumbnail_images/';
                // $directory = public_path('/images');

                $image->move('images/', $imageName);
                $imageUrl = 'images/' . $imageName;
                $photo = new Photo();
                $photo->img = $imageUrl;
                $photo->status = $request->status;
                $photo->save();               
        }
        return redirect('photos')->with('msg', 'All photos saved succsessfully');
    }
    return redirect('photos')->with('msg', 'Error: photos not saved ');
    }
    






    // =====================Blog Post function start===============
    public function blogPosts()
    {
        $posts= BlogPost::orderBy('id', 'desc')->get();
        // return var_dump( $posts);
        return view('admin.blog.posts',compact('sliders', 'posts'));
    }

    public function addPost()
    {
        $cat= BlogCategory::all();
        $tags= Tag::all();
        return view('admin.blog.add-blogpost',compact('cat', 'tags'));
    }

    public function blogEditePost($id)
    {
        $blogpost = BlogPost::find($id);
        $cat= BlogCategory::all();
        return view('admin.blog.edit-blogpost', compact('blogpost', 'cat'));
    }
    
    //need to define DB relation
    public function blogSinglepost($id)
    {
        $sliders= Slider::where('status', 1)
                        ->where('blogpost_id', $id)
                        ->orderBy('id', 'desc')
                        ->get();
        
        $glphotos= BlogPostGallery::where('status', 1)
                        ->where('blogpost_id', $id)
                        ->orderBy('id', 'desc')
                        ->get();

        $single_post= BlogPost::find($id);
        $cat= BlogCategory::find($single_post->cat_id);
         
        

        return view('admin.blog.post-single',compact('cat', 'sliders', 'single_post', 'glphotos', 'tags'));
    }

    public function insertBlogpost(Request $request)
    {
        $bPost= new BlogPost();
        $bPost->user_id = $request->user_id;
        $bPost->cat_id = $request->cat_id;
        $bPost->tag_id = $request->tag_id;
        $bPost->head = $request->head;
        $bPost->media = $request->media;
        $bPost->featured = $request->featured;
        $bPost->post_short = $request->post_short;
        $bPost->photo_gallery_text = $request->photo_gallery_text;
        $bPost->qoute = $request->post_qoute;
        $bPost->post_details = $request->post_details;
        $bPost->status = $request->status;
        $bPost->save();


      
        return redirect('blog-posts')->with('msg', 'Blog Post Saved');
        
    }
    public function updateBlogpost(Request $request)
    {

        $bPost=  BlogPost::find($request->id);
        $bPost->user_id = $request->user_id;
        $bPost->cat_id = $request->cat_id;
        $bPost->tag_id = $request->tag_id;
        $bPost->head = $request->head;
        $bPost->media = $request->media;
        $bPost->featured = $request->featured;
        $bPost->post_short = $request->post_short;
        $bPost->photo_gallery_text = $request->photo_gallery_text;
        $bPost->qoute = $request->post_qoute;
        $bPost->post_details = $request->post_details;
        $bPost->status = $request->status;
        $bPost->save();
        return redirect('blog-posts')->with('msg', 'Updated ok');
        
    }

    public function featured($id)
    {
        $bpost = BlogPost::find($id);
        $bpost->featured = 
        $bpost->featured = $bpost->featured==1 ? 0:1;
        $bpost->save();
        return redirect('blog-posts')->with('msg', 'Featured post changed succsessfully');

    }
    
    
    
    
    
    
    
    
    
    //Delete data from 3 table. 
    public function blogDeletePost($id)
    {
        $blogpost = BlogPost::find($id);

        $sliders = Slider::where('blogpost_id', $id)->get();
        foreach ($sliders as $slider) {
            unlink($slider->sli_img);
            $slider->delete();
        }

        $glposts = BlogPostGallery::where('blogpost_id' ,$id)->get();
        foreach ($glposts as $glpost) {
            unlink($glpost->img);
            $glpost->delete();
        }

        $tags = BlogPosTag::where('post_id' ,$id)->get();
        foreach ($tags as $tag) {
            
            $tag->delete();
        }
        
        $blogpost->delete();
        return redirect('blog-posts')->with('msg', 'Blog-post deleted succsessfully');
    }







    // =====================slider function start===============
    public function slider($id)
    {
        $sliders= Slider::where('blogpost_id', $id)->orderBy('id', 'desc')->get();
        return view('admin.blog.slider',compact('sliders'));
    }
    
    
    
    public function addslider($id)
    {
        $post_id= $id;
        return view('admin.blog.slider-add', compact('post_id'));
    }
    
    public function editslider($id)
    {
        $slider= Slider::find($id);
        $slider->status = $slider->status==1 ? 0:1;
        $slider->save();
        return redirect()->back()->with('msg', 'slider Updated succsessfully');

    }
    public function deleteslider($id)
    {
        $slider = Slider::find($id);
        unlink($slider->img);
        $slider->delete();
        return redirect()->back()->with('msg', 'Slider Deleted succsessfully');
    }
    
   
    
    
    public function insertslider(Request $request)
    {
        // return $request;
        $bio= new Bio();
        $slider = new Slider();
        $imgurl =$bio->imgfinal($request);
        $slider->blogpost_id = $request->post_id;
        $slider->sli_img = $imgurl;
        $slider->head = $request->head;
        $slider->status = $request->status;
        $slider->save();
        return redirect()->back()->with('msg', 'Slider saved succsessfully');
    }
   
   

    
// =====================slider function end ===============
}
