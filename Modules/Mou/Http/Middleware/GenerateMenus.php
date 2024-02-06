<?php

namespace Modules\Mou\Http\Middleware;

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

        //     // mou
        //     $menu->add('<i class="nav-icon fa fa-trophy"></i> Mou Signed', [
        //         'route' => 'backend.mou.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 86,
        //         'activematches' => ['admin/mou*'],
        //         'permission'    => ['view_mou'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        })->sortBy('order');

        return $next($request);
    }
}
