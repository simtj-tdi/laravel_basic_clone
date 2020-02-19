<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Post' => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Gate::define('isAuthor', function ($user, $post) {
//            return $user->id == $post->user_id;
//        });

        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        Gate::define('isManager', function($user) {
            return $user->role == 'manager';
        });

        Gate::define('isUser', function($user) {
            return $user->role == 'user';
        });
        //
    }
}
