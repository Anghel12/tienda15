<?php

namespace App\Observers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */

    public function creating(Post $post)
    {
        /* el post se le va a asignar al usurio que lo esta creando user_id */
        if (! \App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
       
    }

    /* eliminar imagen */
    public function deleting(Post $post)
    {
        if ($post->image) {
           Storage::delete($post->image->url);
        }
    }

   
}
