<?php

namespace Modules\Team\Http\Middleware;

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

            // Teams Dropdown
            $team_menu = $menu->add('<i class="nav-icon fa fa-users"></i> '.__('Team'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 13,
                'activematches' => [
                    'admin/leaderships*',
                    'admin/faculty*',
                    'admin/fcategory*'
                ],
                'permission' => ['view_leadership', 'view_faculty', 'view_fcategory'],
            ]);
            $team_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $team_menu->add('<i class="fa fa-arrow-right"></i>'.__('Leadership Team'), [
                'route' => 'backend.leaderships.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/leaderships*',
                'permission'    => ['edit_leaderships'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Faculty
            $team_menu->add('<i class="fa fa-arrow-right"></i>'.__('Faculty'), [
                'route' => 'backend.faculty.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/faculty*',
                'permission'    => ['edit_faculty'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

              // Submenu: Certification
              $team_menu->add('<i class="fa fa-arrow-right"></i>'.__('Faculty Category'), [
                'route' => 'backend.fcategories.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => 'admin/fcategories',
                'permission'    => ['edit_fcategories'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
