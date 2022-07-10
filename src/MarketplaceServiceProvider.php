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
            __DIR__.'/../resources/assets/assets' => public_path('assets'),
        ]);

        $this->publishes([
            __DIR__.'/../resources/assets/assets_user' => public_path('asset_user'),
        ]);

        // Migration Publish
        $this->publishes([
            __DIR__ . '/../resources/migrations' => database_path('migrations'),
        ], 'market-migrations');

    }
}
