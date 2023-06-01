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

}
