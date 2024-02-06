<?php

namespace Modules\Alumni\Http\Middleware;

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
            $pages_menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Alumni'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 22,
                'activematches' => [
                    'admin/convocation*',
                    'admin/group*',
                ],
                'permission' => ['view_convocation', 'view_group'],
            ]);
            $pages_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // // Submenu: Posts
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Convocation'), [
                'route' => 'backend.convocation.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 23,
                'activematches' => 'admin/convocation*',
                'permission'    => ['edit_convocation'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Categories
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Social Groups'), [
                'route' => 'backend.group.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 24,
                'activematches' => 'admin/group*',
                'permission'    => ['edit_group'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
