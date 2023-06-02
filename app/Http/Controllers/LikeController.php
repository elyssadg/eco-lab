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

}
