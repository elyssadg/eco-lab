<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Comment;

class CommentController extends Controller
{
    // Get All Comment
    public function getComment(){
        return Comment::all();
    }

    // Post Comment
    public function comment(Request $request, $id){
        $validation = [
            'comment' => 'required|min:1'
        ];

        $validator = Validator::make($request->all(), $validation);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $comment = new Comment();
        $comment->thread_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->message = $request->comment;
        $comment->posting_date = Carbon::now();
        $comment->save();

        return redirect('/forum/'.$id);
    }

}
