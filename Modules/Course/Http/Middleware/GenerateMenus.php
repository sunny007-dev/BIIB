<?php

namespace Modules\Course\Http\Middleware;

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
        \Menu::make('admin_sidebar', function ($menu) {

            // Academics Dropdown
            $pages_menu = $menu->add('<i class="nav-icon fa fa-book"></i> '.__('Academics'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 16,
                'activematches' => [
                    'admin/course*',
                    'admin/dates*',
                    'admin/loan*',
                    'admin/brochure*',
                    'admin/brochureLink'
                ],
                'permission' => ['view_course', 'view_dates','view_loan'],
            ]);
            $pages_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // // Submenu: Course
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Course'), [
                'route' => 'backend.course.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/course*',
                'permission'    => ['edit_course'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: News
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('Important Dates'), [
                'route' => 'backend.dates.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/dates*',
                'permission'    => ['edit_dates'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
             // Submenu: Loan
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('Loan'), [
                'route' => 'backend.loan.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => 'admin/loan*',
                'permission'    => ['edit_loan'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
              // Submenu: Brochure
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('Brochure'), [
                'route' => 'backend.brochure.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 85,
                'activematches' => 'admin/brochure*',
                'permission'    => ['edit_brochure'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
              // Submenu: Brochure Link
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('Brochure Link'), [
                'route' => 'backend.brochureLink.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 86,
                'activematches' => 'admin/brochureLink*',
                'permission'    => ['edit_brochureLink'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
