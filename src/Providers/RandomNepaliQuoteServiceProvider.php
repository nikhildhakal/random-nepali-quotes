<?php

namespace RandomNepaliQuotes\Providers;

use Illuminate\Support\ServiceProvider;
use RandomNepaliQuotes\QuoteGenerator;

class RandomNepaliQuoteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * 
     * @return void
     */
    public function register()
    {
        // Register the QuoteGenerator class
        $this->app->singleton(QuoteGenerator::class, function () {
            return new QuoteGenerator();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
