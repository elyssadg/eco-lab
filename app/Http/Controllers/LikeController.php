<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    // Get All Likes Data
    public function getLike(){
        return Like::all();
    }

    // Get Likes Data by thread_id
    public function getLikeByThread($thread_id){
        return Like::where('thread_id', $thread_id)->get();
    }

}
