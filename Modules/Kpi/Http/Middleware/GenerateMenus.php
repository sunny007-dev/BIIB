<?php

namespace Modules\Kpi\Http\Middleware;

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

            // kpi
            // $menu->add('<i class="nav-icon fa fa-bolt"></i> Kpi & Features', [
            //     'route' => 'backend.kpi.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 86,
            //     'activematches' => ['admin/kpi*'],
            //     'permission'    => ['view_kpi'],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link',
            // ]);
        })->sortBy('order');

        return $next($request);
    }
}
