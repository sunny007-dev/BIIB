<?php

namespace Modules\Menus\Http\Middleware;

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
            // $pages_menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Menu'), [
            //     'class' => 'nav-group',
            // ])
            // ->data([
            //     'order'         => 81,
            //     'activematches' => [
            //         'admin/footer*',
            //         'admin/footerCategories*',
            //     ],
            //     'permission' => ['view_footer', 'view_footerCategories'],
            // ]);
            // $pages_menu->link->attr([
            //     'class' => 'nav-link nav-group-toggle',
            //     'href'  => '#',
            // ]);

            // // Submenu: Posts
            // $pages_menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Footer'), [
            //     'route' => 'backend.footer.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 82,
            //     'activematches' => 'admin/footer*',
            //     'permission'    => ['edit_footer'],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link',
            // ]);
            // // Submenu: Categories
            // $pages_menu->add('<i class="nav-icon fas fa-sitemap"></i> '.__('Footer Categories'), [
            //     'route' => 'backend.footerCategories.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 83,
            //     'activematches' => 'admin/footerCategories*',
            //     'permission'    => ['edit_footerCategories'],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link',
            // ]);
        })->sortBy('order');

        return $next($request);
    }
}
