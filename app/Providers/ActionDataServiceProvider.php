<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ActionData\ActionDataBase;

/**
 * Created by PhpStorm.
 * Filename: ActionDataServiceProvider.php
 * Project Name: my_design_principles
 * Author: akbarali
 * Date: 11/12/2023
 * Time: 16:39
 * GitHub: https://github.com/akbarali1
 * Telegram: @akbar_aka
 * E-mail: me@akbarali.uz
 */
class ActionDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->beforeResolving(ActionDataBase::class, function ($className) {
            $this->app->bind($className, fn() => $className::createFromRequest($this->app['request']));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}