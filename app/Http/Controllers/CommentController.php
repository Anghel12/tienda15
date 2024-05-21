<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function viewComment()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function viewCommentPost(Post $post){

       return  $post;
    }

   public function agregarMensaje(Request $request, post $post){

        $request->validate([
            'mensaje' => 'required'
            
        ]);

      $post->comment()->create($request->all()); 


        return redirect()->back()->with('info', 'Mensaje creado');     

    } 
}
