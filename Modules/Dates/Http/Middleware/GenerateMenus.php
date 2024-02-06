<?php

namespace Modules\Dates\Http\Middleware;

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

        //     // datess
        //     $menu->add('<i class="nav-icon fa fa-calendar"></i> Important Dates', [
        //         'route' => 'backend.dates.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 86,
        //         'activematches' => ['admin/dates*'],
        //         'permission'    => ['view_dates'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
