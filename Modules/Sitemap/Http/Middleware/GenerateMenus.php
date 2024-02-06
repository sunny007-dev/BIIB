<?php

namespace Modules\Sitemap\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // sitemap
        //     $menu->add('<i class="nav-icon fa fa-bolt"></i> Sitemap', [
        //         'route' => 'backend.sitemap.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 86,
        //         'activematches' => ['admin/sitemap*'],
        //         'permission'    => ['view_sitemap'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        })->sortBy('order');

        return $next($request);
    }
}
