<?php

namespace SifIntegration\LecBatchSif;

use Illuminate\Support\ServiceProvider;

class LecBatchSifServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('SifIntegration\LecBatchSif\Controllers\LecBatchSifController');
    }
}

?>