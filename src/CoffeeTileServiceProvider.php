<?php

namespace Spatie\CoffeeTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class CoffeeTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-coffee-tile'),
        ], 'dashboard-coffee-tile-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-coffee-tile');

        Livewire::component('coffee-tile', CoffeeTileComponent::class);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ], 'coffee-tile-migrations');
    }
}
