<?php

namespace Wame\LaravelNovaMenuSwitcher;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelNovaMenuSwitcherServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->booted(function () {
            $this->loadRoutes();
        });

        $this->loadViews();
    }

    public function loadViews(): void
    {
        $this->loadViewsFrom(
            path: __DIR__ . '/../resources/views',
            namespace: 'menu-switcher',
        );
    }

    public function loadRoutes(): void
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova'])
            ->prefix('nova-vendor/menu-switcher')
            ->group(__DIR__ . '/../routes/api.php');
    }

    public function loadJavascript()
    {
        //$this->;
    }
}
