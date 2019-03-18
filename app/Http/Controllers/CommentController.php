<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Reply;
use App\Like;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function insert(Request $rquest)
    {
        $cmmnt = new Comment();
        $cmmnt->blog_post_id = $rquest->blog_post_id;
        $cmmnt->user_id = $rquest->user_id;
        $cmmnt->comment = $rquest->comment;
        $cmmnt->save();
        return redirect()->back();
    }
    
    public function editComment(Request $rquest)
    {
        $cmmnt =  Comment::find($rquest->id);
        // return  $rquest->comment;
        $cmmnt->comment = $rquest->comment;
        $cmmnt->save();
        return redirect()->back();
    }

    public function deleteComment($id)
    {
        $cmmnt = Comment::find($id);
        
        foreach ($cmmnt->reply as $key => $reply) {
            $reply->delete();
        }
        $cmmnt->delete();
        return redirect()->back();
    }
    
  


    
    
    // ============reply route start===========
    
    public function reply(Request $rquest)
    {
        $cmmnt = new Reply();
        $cmmnt->blogpost_id = $rquest->blogpost_id;
        $cmmnt->user_id = $rquest->user_id;
        $cmmnt->reply = $rquest->reply;
        $cmmnt->comment_id = $rquest->comment_id;
        $cmmnt->save();
        return redirect()->back();
    }

    public function editReply(Request $rquest)
    {
        $reply =  Reply::find($rquest->id);
        // return  $rquest->reply;
        $reply->reply = $rquest->reply;
        $reply->save();
        return redirect()->back();
    }

    public function deletereply($id)
    {
        $reply = Reply::find($id);
        $reply->delete();
        return redirect()->back();
    }

    // ===============Like start==================
    public function like($id)
    {
        $like= Like::where('post_id',$id)->first();
        if (!empty($like)) {
            $like->delete();
        return redirect()->back();

        } else {
            $like= new Like();
            $like->user_id = Auth::user()->id;
            $like->post_id = $id;
            $like->like = $like->like == true ?false : true;
            $like->save();
             return redirect()->back();

        }
        
        
    }
}
