<?php

namespace Modules\Lecture\Http\Middleware;

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

            // slider
            // $menu->add('<i class="nav-icon fa fa-graduation-cap"></i> Lectures & Training', [
            //     'route' => 'backend.lecture.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 86,
            //     'activematches' => ['admin/lecture*'],
            //     'permission'    => ['view_lecture'],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link',
            // ]);
        })->sortBy('order');

        return $next($request);
    }
}
