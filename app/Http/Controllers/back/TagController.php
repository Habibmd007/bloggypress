<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\BlogPosTag;

class TagController extends Controller
{
    public function index()
    {
        $tags= Tag::all();
        return view('admin.tag.tags', compact('tags'));
    }

    public function inserttag(Request $request)
    {
        $tag= new Tag();
        $tag->tag = $request->tag;
        $tag->slug = str_slug($request->tag);
        $tag->save();
        return redirect()->back()->with('msg', 'Tag Saved Successfully');
    }
    
    public function deletetag($id)
    {
        $tag= Tag::find($id);
        $tag->delete();
        return redirect()->back()->with('msg', 'Tag Deleted Successfully');
    }

    public function addTag($id)
    {
        $post_id= $id;
        $tags= Tag::all();
        return view('admin.tag.add-tag-topost',compact('post_id', 'tags'));
    }


    public function addTagTopost(Request $request)
    {
        
        $tagings= $request->tag;
        foreach($tagings as $tagg){

            $post_tag= new BlogPosTag();
            $pid= $request->post_id;
                $post_tag->post_id= $pid;
                $post_tag->tag_id= $tagg;
                $post_tag->save();
            }

            return redirect()->back()->with('msg', 'Tag saved');
        
    }

    public function deltepost($id)
    {
        $post_tag= BlogPosTag::find($id);
        $post_tag->delete();
        return redirect()->back()->with('msg', 'Tag Deleted');
        
    }


}
