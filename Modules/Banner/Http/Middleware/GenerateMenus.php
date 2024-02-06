<?php

namespace Modules\Banner\Http\Middleware;

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
        // \Menu::make('admin_sidebar', function ($menu) {

        //     // banners
        //     $menu->add('<i class="nav-icon fas fa-table"></i> Banner', [
        //         'route' => 'backend.banner.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 89,
        //         'activematches' => ['admin/banner*'],
        //         'permission'    => ['view_banner'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
