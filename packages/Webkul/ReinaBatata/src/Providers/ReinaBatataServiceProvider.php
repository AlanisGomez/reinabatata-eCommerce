<?php

namespace Webkul\ReinaBatata\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Webkul\ReinaBatata\Facades\ReinaBatata as ReinaBatataFacade;

class ReinaBatataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        include __DIR__ . '/../Http/helpers.php';

        include __DIR__ . '/../Http/admin-routes.php';

        include __DIR__ . '/../Http/front-routes.php';

        $this->app->register(EventServiceProvider::class);

        $this->loadGloableVariables();

        $this->loadPublishableAssets();

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'reinabatata');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'reinabatata');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();

        $this->registerFacades();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
        );
    }

    /**
     * Register Bouncer as a singleton.
     *
     * @return void
     */
    protected function registerFacades()
    {
        $loader = AliasLoader::getInstance();

        $loader->alias('reinabatata', ReinaBatataFacade::class);
    }

    /**
     * this function will provide global variables shared by view (blade files)
     *
     * @return boolean
     */
    private function loadPublishableAssets()
    {
        $this->publishes([
            __DIR__ . '/../../publishable/assets/' => public_path('themes/reinabatata/assets'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../Resources/views/shop' => resource_path('themes/reinabatata/views'),
        ]);

        return true;
    }

    /**
     * this function will provide global variables shared by view (blade files)
     *
     * @return boolean
     */
    private function loadGloableVariables()
    {
        $reinaBatataHelper = app('Webkul\ReinaBatata\Helpers\Helper');
        $reinaBatataMetaData = $reinaBatataHelper->getReinaBatataMetaData();

        view()->share('showRecentlyViewed', true);
        view()->share('reinabatataMetaData', $reinaBatataMetaData);

        return true;
    }
}
