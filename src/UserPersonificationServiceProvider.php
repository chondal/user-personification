<?php

namespace Chondal\UserPersonification;

use Illuminate\Support\ServiceProvider;

class UserPersonificationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'UserPersonification');

        $this->publishes([
            __DIR__ . '/../resources/views/' => resource_path('view/vendor/user-personification'),
        ], 'user-personification-views');
        $this->publishes([
            __DIR__ . '/../config/user-personification.php' => base_path('config/user-personification.php'),
        ], 'user-personifications-config');
    }

    public function register()
    {
        $this->app->bind('user-personification', function () {
            return new UserPersonification;
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/user-personification.php', 'user-personification');
    }

}
