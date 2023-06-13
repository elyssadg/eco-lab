<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThreadResource;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Thread;

class ThreadController extends Controller
{
    // Forum Page
    public function discussion_forum(){
        $threads = Thread::paginate(9);

        return view('pages.forum')
                ->with('threads', $threads);
    }

    // Get Thread By ID
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

    public function thread_api(){
        $threads = Thread::all();
        return ThreadResource::collection($threads);
    }

    // Get Thread Mobile
    public function show_api($id){
        $threads = Thread::find($id);
        // return response()->json(['data'=>$threads]);
        return new ThreadResource($threads);
    }

    // Add New Thread
    public function post_thread(Request $request){
        $validation = [
            'title' => 'required',
            'message' => 'required|regex:/\b(\w+\b\s*){5,}/',
            'image' => 'mimetypes:image/jpeg,image/jpg,image/png'
        ];

        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            $error_message = $validator->errors()->first();
            return response()->json([
                'error' => true,
                'error_message' => $error_message
            ]);
        }
        
        $thread = new Thread();
        $thread->user_id = Auth::user()->id;
        $thread->title = $request->title;
        $thread->message = $request->message;
        $thread->posting_date = Carbon::now('Asia/Jakarta');
        $thread->save();

        return response()->json([
            'error' => false,
            'redirect' => 'forum/'.$thread->id
        ]);
    }

    // New Thread Mobile
    public function post_thread_api(Request $request){
        $validation = [
            'title' => 'required',
            'message' => 'required|regex:/\b(\w+\b\s*){5,}/',
            'image' => 'mimetypes:image/jpeg,image/jpg,image/png'
        ];

        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            $error_message = $validator->errors()->first();
            return response()->json([
                'error' => true,
                'error_message' => $error_message
            ]);
        }

        $thread = new Thread();
        $thread->user_id = Auth::user()->id;
        $thread->title = $request->title;
        $thread->message = $request->message;
        $thread->posting_date = Carbon::now('Asia/Jakarta');
        $thread->save();
        return "false";
    }

}
