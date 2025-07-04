<?php

namespace App\Providers;

use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
 
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')){
            $this->app['request']->server->set('HTTPS', 'on');
            URL::forceScheme('https');
        }
        Gate::policy(Post::class, PostPolicy::class);

    }
}
