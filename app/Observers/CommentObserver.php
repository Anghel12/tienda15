<?php

namespace App\Observers;

use App\Models\Comment;


class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     *
     * @param  \App\Models\Comment  $comment
     * @return void
     */

     /* Obeserver para el metodo comment enenvent que valide que el id del usuario corresponde con su cuenta */
    public function creating(Comment $comment)
    {
        if (! \App::runningInConsole()) {
        $comment->user_id = auth()->user()->id;
        }
    }

}
