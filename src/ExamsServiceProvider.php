<?php

namespace majidfeiz\Exams;

use Illuminate\Support\ServiceProvider;

class ExamsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views/exams','exams');

    }

    public function register()
    {

    }
}
