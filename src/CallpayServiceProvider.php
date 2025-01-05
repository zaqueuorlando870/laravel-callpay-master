<?php

/*
 * This file is part of the Laravel Callpay package.
 *
 * (c) Prosper Zaqueu Orlando <zaqueuorlando870@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zaqueuorlando870\Callpay;

use Illuminate\Support\ServiceProvider;

class CallpayServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Publishes all the config file this package needs to function
    */
    public function boot()
    {
        $config = realpath(__DIR__.'/../resources/config/callpay.php');

        $this->publishes([
            $config => config_path('callpay.php')
        ]);
    }

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('laravel-callpay', function () {

            return new Callpay;

        });
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['laravel-callpay'];
    }
}
