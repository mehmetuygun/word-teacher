<?php

namespace App\Providers;

use App\Services\Api\OxfordDictionaryApi;
use App\Services\Contracts\DictionaryApiInterface;
use Illuminate\Support\ServiceProvider;

class DictionaryApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(DictionaryApiInterface::class, function ($app) {
            if (config('dictionary.default') == 'oxford') {
                return new OxfordDictionaryApi();
            }

            throw new \Exception('The dictionary api driver is invalid.');
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
