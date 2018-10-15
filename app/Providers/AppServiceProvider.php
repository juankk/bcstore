<?php

namespace App\Providers;

use App\Store\Bigcommerce\Bigcommerce;
use App\Store\StoreContainer;
use Bigcommerce\Api\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('API_STORE_URL')) {
            Client::configure([
                'store_url' => env('API_STORE_URL'),
                'username' => env('API_USERNAME'),
                'api_key' => env('API_KEY'),
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StoreContainer::class, function(){
            //dependency injection
            $customerRepository = new Bigcommerce();
            return new StoreContainer( $customerRepository );
        });
    }
}
