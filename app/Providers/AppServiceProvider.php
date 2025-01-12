<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

//        Gate::policy(Post::class, PostPolicy::class);

        /*Gate::before(function (User $user, string $ability) {
            if ($user->role === 3) {
                return true;
            }
            return null;
        });

        Gate::define('create-post', function (User $user) {
            return in_array($user->role, [2, 3]);
        });

        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
//            return $user->id === $post->user_id || $user->role === 3;
        });

        Gate::define('delete-post', function (User $user) {
//            return false;
            return $user->role === 3;
        });*/

    }
}
