<?php

namespace Modules\Award\Http\Middleware;

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

            // awards
        //     $menu->add('<i class="nav-icon fa fa-trophy"></i> Awards', [
        //         'route' => 'backend.award.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 86,
        //         'activematches' => ['admin/award*'],
        //         'permission'    => ['view_award'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
