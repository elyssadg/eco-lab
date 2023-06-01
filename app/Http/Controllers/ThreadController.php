<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    // Forum Page
    public function discussion_forum(){
        $threads = Thread::paginate(9);

        $comment_controller = new CommentController();
        $comments = $comment_controller->getComment();

        $like_controller = new LikeController();
        $likes = $like_controller->getLike();
        return view('pages.forum')
                ->with('threads', $threads)
                ->with('comments', $comments)
                ->with('likes', $likes);
    }

    public function thread($id){
        $thread = Thread::find($id);

        $comment_controller = new CommentController();
        $comments = $comment_controller->getCommentByThread($id);

        $like_controller = new LikeController();
        $likes = $like_controller->getLikeByThread($id);

        return view('pages.thread')
                ->with('thread', $thread)
                ->with('comments', $comments)
                ->with('likes', $likes);
    }

}
