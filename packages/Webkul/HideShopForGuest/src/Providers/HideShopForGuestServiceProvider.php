<?php

namespace Webkul\HideShopForGuest\Providers;

use Illuminate\Support\ServiceProvider;

class HideShopForGuestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'hideshopforguest');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/../Config/system.php', 'core'
        );
    }
}
