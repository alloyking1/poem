<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Comment;
use App\Product;
use Auth;

class CommentController extends Controller
{

    /**
     * save post comments
     * @param post ID
     * @return all comment related to post
     */

    public function save(Request $request){
        $validate = Validator::make($request->all(),[
            'comment' => 'required| string',
        ]);

        if($validate->fails()){
            return Redirect::back()->with('message', "comment cannot be empty");
        }

        if(!Auth::user()){
            return Redirect::back()->with('message', "Only logged in users can comment");
        }

        $create = Comment::create([
            'comment' => $request->comment,
            'post_id' => $request->id,
            'user_id' => Auth::user()->id,
            // 'user_id' => Auth::user(),
        ]);

        return Redirect::back()->with('message', "Comment saved");
    }

    /**
     * fetch post comments
     * @param post ID
     * @return all comment related to post
     */

    public function fetch(Request $request){
        $comments = Product::find($request->id);
        $comments->poem_comment;
        return response()->json($comments, 200);
    }
    
}
