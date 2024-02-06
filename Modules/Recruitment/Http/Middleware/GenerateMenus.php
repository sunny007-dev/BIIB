<?php

namespace Modules\Recruitment\Http\Middleware;

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
            $team_menu = $menu->add('<i class="nav-icon fa fa-users"></i> '.__('Campus Recruiters'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 15,
                'activematches' => [
                    'admin/recruiters*',
                    'admin/placement*',
                    'admin/internship*'
                ],
                'permission' => ['view_recruiters', 'view_placement', 'view_internship'],
            ]);
            $team_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $team_menu->add('<i class="fa fa-arrow-right"></i>'.__('Recruiter'), [
                'route' => 'backend.recruiters.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/recruiters*',
                'permission'    => ['edit_recruiters'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Research
            $team_menu->add('<i class="fa fa-arrow-right"></i>'.__('Placement'), [
                'route' => 'backend.placement.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/placement*',
                'permission'    => ['edit_placement'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

              // Submenu: Certification
              $team_menu->add('<i class="fa fa-arrow-right"></i>'.__('Internship'), [
                'route' => 'backend.internship.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => 'admin/internship*',
                'permission'    => ['edit_internship'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
