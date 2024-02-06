<?php

namespace Modules\Cultural\Http\Middleware;

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

            // Articles Dropdown
            $menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Activities'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 19,
                'activematches' => [
                    'admin/cultural*',
                    'admin/ccategories*',
                ],
                'permission' => ['view_cultural', 'view_ccategories'],
            ]);
            $menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Cultural
            $menu->add('<i class="fa fa-arrow-right"></i>'.__('Sports & Cultural'), [
                'route' => 'backend.cultural.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/cultural*',
                'permission'    => ['edit_cultural'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Categories
            $menu->add('<i class="fa fa-arrow-right"></i>'.__('Categories'), [
                'route' => 'backend.ccategories.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/ccategories*',
                'permission'    => ['edit_ccategories'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
