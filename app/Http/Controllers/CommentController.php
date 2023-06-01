<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // Get All Comment
    public function getComment(){
        return Comment::all();
    }

    // Get Comment by thread_id
    public function getCommentByThread($thread_id){
        return Comment::where('thread_id', $thread_id)->get();
    }

}
