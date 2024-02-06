<?php

namespace Modules\Loan\Http\Middleware;

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

        //     // Loans
        //     $menu->add('<i class="nav-icon fas fa-table"></i> Loan', [
        //         'route' => 'backend.loan.index',
        //         'class' => 'nav-item',
        //     ])
        //     ->data([
        //         'order'         => 89,
        //         'activematches' => ['admin/loan*'],
        //         'permission'    => ['view_loan'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
