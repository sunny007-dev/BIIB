<?php

namespace Modules\BrochureLink\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class BrochureLinkServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom(module_path('BrochureLink', 'Database/Migrations'));

        // adding global middleware
        $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        $kernel->pushMiddleware('Modules\BrochureLink\Http\Middleware\GenerateMenus');

        // register commands
        $this->registerCommands('\Modules\BrochureLink\Console');
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
            module_path('BrochureLink', 'Config/config.php') => config_path('brochureLink.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('BrochureLink', 'Config/config.php'),
            'brochureLink'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/brochureLink');

        $sourcePath = module_path('BrochureLink', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path.'/modules/brochureLink';
        }, \Config::get('view.paths')), [$sourcePath]), 'brochureLink');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/brochureLink');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'brochureLink');
        } else {
            $this->loadTranslationsFrom(module_path('BrochureLink', 'Resources/lang'), 'brochureLink');
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
