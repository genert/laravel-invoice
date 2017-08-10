<?php
/**
 * Created by PhpStorm.
 * User: Genert Org
 * Date: 08/08/2017
 * Time: 12:00
 */

namespace Genert\Laravel\Invoice;

use Illuminate\Support\ServiceProvider;

final class InvoiceServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'invoice');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'invoice');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/invoice'),
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/invoice'),
        ]);

        $this->app->bind('invoice', function () {
            return new Invoice();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['invoice'];
    }
}
