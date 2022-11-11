<?php

namespace Suainul\Rajaongkir\Providers;

use Illuminate\Support\ServiceProvider;
use Suainul\Rajaongkir\Rajaongkir;

class RajaongkirProvider extends ServiceProvider
{
 /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/rajaongkir.php', 'rajaongkir');

        // Register the service the package provides.
        $this->app->singleton('rajaongkir', function () {
            return $this->app->make(Rajaongkir::class);
        });
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../../config/rajaongkir.php' => config_path('rajaongkir.php'),
        ], 'rajaongkir.config');
    }
}