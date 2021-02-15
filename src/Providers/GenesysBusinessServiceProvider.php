<?php

namespace GenesysLite\GenesysBusiness\Providers;

use Illuminate\Support\ServiceProvider;

class GenesysBusinessServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/genesysBusiness.php',
            'genesysBusiness'
        );

        $this->publishes([
            __DIR__.'/../../graphql' => base_path('/graphql/GenesysBusiness'),
        ], 'genesys-business-schema');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                __DIR__.'/../../config/genesysBusiness.php' => config_path('genesysBusiness.php'),
            ], 'config');
        }
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
