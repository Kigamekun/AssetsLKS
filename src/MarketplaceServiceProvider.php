<?php

namespace Kigamekun\MarketplaceKiga;

use Illuminate\Support\ServiceProvider;

class MarketplaceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Controller Publish
        $this->publishes([
            __DIR__.'/../resources/controllers' => app_path('Http/Controllers'),
        ]);

        // Views Admin Publish
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/admin'),
        ]);

        // Base Layouts Publish
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/layouts'),
        ]);

        // Assets Publish
        $this->publishes([
            __DIR__.'/../resources/views' => public_path('views/layouts'),
        ]);


        // Migration Publish
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations/my-package'),
        ], 'my-package-migrations');

    }
}
