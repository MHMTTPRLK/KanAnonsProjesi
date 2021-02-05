<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function  index()
    {
        $comments=Comment::all();
        return view('back.comment.commentList',compact('comments'));
    }
    public function commentGetData(Request $request)
    {
        $comment=Comment::findOrFail($request->id);

        return response()->json($comment);
    }
    public function commentSwitch(Request $request)
    {
        // return $request->id;
        $comment=Comment::findOrFail($request->id);
        $comment->status=$request->statu=='true' ? 1 : 0;
        $comment->save();
    }
}
