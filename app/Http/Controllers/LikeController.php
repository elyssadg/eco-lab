<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    // Get All Likes Data
    public function getLike(){
        return Like::all();
    }

    // Handle Like Action
    public function like($id){
        $like = new Like();
        $like->thread_id = $id;
        $like->user_id = Auth::user()->id;
        $like->save();
        
        return redirect('forum/'.$id);
    }

    // Handle Unike Action
    public function unlike($id) {
        $user_id = Auth::user()->id;
        $like = Like::where('thread_id', '=', $id, 'and')
                        ->where('user_id', '=', $user_id);
    
        if ($like) {
            $like->delete();
        }
    
        return redirect('forum/'.$id);
    }
    

}
