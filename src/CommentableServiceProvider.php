<?php

namespace BrianFaust\Commentable;

use BrianFaust\ServiceProvider\ServiceProvider;

class CommentableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishMigrations();

        $this->publishes([
            __DIR__.'/../resources/config/commentable.php' => config_path('commentable.php'),
        ]);

        $this->mergeConfigFrom(__DIR__.'/../resources/config/commentable.php', 'commentable');
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'commentable';
    }
}
