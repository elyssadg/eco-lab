<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    // Forum Page
    public function discussion_forum(){
        $threads = Thread::all();
        return view('pages.forum')->with('threads', $threads);
    }

    public function thread(Request $request){

    }

}
