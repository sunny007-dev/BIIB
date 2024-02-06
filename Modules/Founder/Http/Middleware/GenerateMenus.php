<?php

namespace Modules\Founder\Http\Middleware;

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

            // founder
            $menu->add('<i class="nav-icon fa fa-bolt"></i> Founder', [
                'route' => 'backend.founder.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 10,
                'activematches' => ['admin/founder*'],
                'permission'    => ['view_founder'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
