<?php

namespace Modules\Gallery\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class GalleryServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path('Gallery', 'Database/Migrations'));

        // adding global middleware
        $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        $kernel->pushMiddleware('Modules\Gallery\Http\Middleware\GenerateMenus');

        // register commands
        $this->registerCommands('\Modules\Gallery\Console');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Gallery', 'Config/config.php') => config_path('gallery.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Gallery', 'Config/config.php'),
            'gallery'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/gallery');

        $sourcePath = module_path('Gallery', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path.'/modules/gallery';
        }, \Config::get('view.paths')), [$sourcePath]), 'gallery');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/gallery');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'gallery');
        } else {
            $this->loadTranslationsFrom(module_path('Gallery', 'Resources/lang'), 'gallery');
        }
    }

    /**
     * Register commands.
     *
     * @param  string  $namespace
     */
    protected function registerCommands($namespace = '')
    {
        $finder = new Finder(); // from Symfony\Component\Finder;
        $finder->files()->name('*.php')->in(__DIR__.'/../Console');

        $classes = [];
        foreach ($finder as $file) {
            $class = $namespace.'\\'.$file->getBasename('.php');
            array_push($classes, $class);
        }

        $this->commands($classes);
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
