<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentsController extends Controller {

    public function sendComment(Request $request, Post $post) {
        //dodati form validation
        $comment = new Comment();
        $comment->commenter = $request['username'];
        $comment->text = $request['usercomment'];
        $comment->email = $request['email'];
        $comment->post_id = $post->id;

        $comment->save();

        return response()->json([
            'system_message' => 'Comment has been added.',
        ]);
    }

    public function loadAllComments(Post $post) {
        return view('front.blog.post_partials.post_comment', [
            'comments' => $post->comments
        ]);
    }

}
