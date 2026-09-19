<?php

namespace Sanjoy\AuthKit;

use Illuminate\Support\ServiceProvider;

class AuthKitServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //web route load
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}