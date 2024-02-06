<?php

namespace Modules\Recruitment\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

class RecruitmentServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom(module_path('Recruitment', 'Database/Migrations'));

        // adding global middleware
        $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
        $kernel->pushMiddleware('Modules\Recruitment\Http\Middleware\GenerateMenus');

        // register commands
        $this->registerCommands('\Modules\Recruitment\Console');
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
            module_path('Recruitment', 'Config/config.php') => config_path('recruitment.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Recruitment', 'Config/config.php'),
            'recruitment'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/recruitment');

        $sourcePath = module_path('Recruitment', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath,
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path.'/modules/recruitment';
        }, \Config::get('view.paths')), [$sourcePath]), 'recruitment');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/recruitment');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'recruitment');
        } else {
            $this->loadTranslationsFrom(module_path('Recruitment', 'Resources/lang'), 'recruitment');
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
