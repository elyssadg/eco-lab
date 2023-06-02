<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Thread;

class ThreadController extends Controller
{
    // Forum Page
    public function discussion_forum(){
        $threads = Thread::paginate(9);

        return view('pages.forum')
                ->with('threads', $threads);
    }

    public function thread($id){
        $thread = Thread::find($id);
        $threads = Thread::all();
        
        $popular_threads = collect($threads)->sortByDesc(function ($thread) {
            return $thread->like->count();
        })->take(3);

        $unanswered_threads = Thread::doesntHave('comment')->take(3)->get();

        return view('pages.thread')
                ->with('popular_threads', $popular_threads)
                ->with('unanswered_threads', $unanswered_threads)
                ->with('thread', $thread);
    }

}
