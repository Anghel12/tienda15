<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    /* mostrar los post cullos usuarios sean dueños de ese post */
        public function author( User $user, Post $post){

            if ($user->id == $post->user_id) {
                return true;
            }else{
                return false;
            }
            
        }
/* mostrar los post cullos status sea 2, el estatus 1 es borrador el estatus 2 es publicado en este caso queremos a toso los publicados */
        public function published(?User $user, Post $post){
            
            if ($post->status == 2) {
                return true;
            } else {
                return false;
            }
            
        }

}
