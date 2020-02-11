<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    // index
    public function viewAny(User $user)
    {
        //
        return true;
    }

    // show
    public function view(User $user, Post $post)
    {
        //
        return true;
    }

    // store
    public function create(User $user)
    {
        //
        return true;
    }

    // edit, update
    public function update(User $user, Post $post)
    {
        //
        return $user->id == $post->user_id;
    }

    // destory
    public function delete(User $user, Post $post)
    {
        //
        return $user->id == $post->user_id;
    }


    public function restore(User $user, Post $post)
    {
        //
        return true;
    }


    public function forceDelete(User $user, Post $post)
    {
        //

    }
}
