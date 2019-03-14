<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Reply;

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
}
