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
    public function reply(Request $rquest)
    {
        $cmmnt = new Reply();
        $cmmnt->comment_id = $rquest->comment_id;
        $cmmnt->user_id = $rquest->user_id;
        $cmmnt->reply = $rquest->reply;
        $cmmnt->save();
        return redirect()->back();
    }
}
