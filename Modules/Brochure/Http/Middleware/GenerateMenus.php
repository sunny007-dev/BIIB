<?php

namespace Modules\Brochure\Http\Middleware;

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

        //     // brochure
        //     $menu->add('<i class="nav-icon fa fa-television"></i> Brochure ', [
        //         'route' => 'backend.brochure.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 86,
        //         'activematches' => ['admin/brochure*'],
        //         'permission'    => ['view_brochure'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
