<?php namespace Memory\LaravelGravatar;

use Illuminate\Support\ServiceProvider;

class LaravelGravatarServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->package('memory/laravel-gravatar');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['gravatar'] = $this->app->share(function ($app) {
            return new Gravatar($app['config']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
