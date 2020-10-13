<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function comment(Request $req) {
        $comment = new Comment;
        $id = $req->input('planeId');
        $comment->planeId = $req->input('planeId');
        $comment->userName = $req->input('userName');
        $comment->rate = $req->input('rate');
        $comment->text = $req->input('text');

        $comment->save();

        return redirect()->route('onlyOne', $id)->with('success', 'Комментарий опубликован');
    }

    public function deleteComment(Request $req){
        $id = $req->input('id');
        Comment::findOrFail($id)->delete();
        return redirect()->route('onlyOne', $id)->with('success', 'Комментарий удалён');
    }
}
