<?php

namespace Modules\Student\Http\Middleware;

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

            // Student Dropdown
            $pages_menu = $menu->add('<i class="nav-icon fa fa-graduation-cap"></i> '.__('Student'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 17,
                'activematches' => [
                    'admin/student*',
                    'admin/news*',
                ],
                'permission' => ['view_student', 'view_news'],
            ]);
            $pages_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // // Submenu: Student
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Student Council'), [
                'route' => 'backend.student.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/student*',
                'permission'    => ['edit_student'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Testimonial
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('Testimonials'), [
                'route' => 'backend.testimonial.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/testimonial*',
                'permission'    => ['edit_testimonial'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}

