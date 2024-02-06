<?php

namespace Modules\Convention\Http\Middleware;

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

            // Page Menu Dropdown
            $pages_menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Industry Interface'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 14,
                'activematches' => [
                    'admin/convention*',
                    'admin/lecture*',
                    'admin/mou',
                    'admin/footer*',
                    'admin/footerCategories*',
                ],
                'permission' => ['view_pages', 'view_lecture','view_mou'],
            ]);
            $pages_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Pages
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('National Convention'), [
                'route' => 'backend.convention.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/convention*',
                'permission'    => ['edit_convention'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
         
            // Submenu: Lecture
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Guest Lecturers'), [
                'route' => 'backend.lecture.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/lecture*',
                'permission'    => ['edit_lecture'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
             // Submenu:Mou
             $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('MOU'), [
                'route' => 'backend.mou.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => 'admin/mou*',
                'permission'    => ['edit_mou'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
               
             
        })->sortBy('order');

        return $next($request);
    }
}
