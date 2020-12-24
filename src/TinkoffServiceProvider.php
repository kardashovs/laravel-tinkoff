<?php

namespace Kaser\Tinkoff;

use Illuminate\Support\ServiceProvider;

class TinkoffServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tinkoff.php', 'tinkoff');

        $this->app->singleton('tinkoff', function ($app) {
            $config = $app->make('config');
            $terminalKey = $config->get('tinkoff.terminalKey');
            $secretKey = $config->get('tinkoff.secretKey');
            $api_url = $config->get('tinkoff.api_url');

            return new TinkoffService($terminalKey, $secretKey, $api_url);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/tinkoff.php' => config_path('tinkoff.php'),
        ], 'tinkoff');
    }
}
