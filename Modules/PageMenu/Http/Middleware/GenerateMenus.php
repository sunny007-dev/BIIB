<?php

namespace Modules\PageMenu\Http\Middleware;

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
            $pages_menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Pages Menu'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 11,
                'activematches' => [
                    'admin/pages*',
                    'admin/pageCategories*',
                    'admin/kpi',
                    'admin/footer*',
                    'admin/footerCategories*',
                    'admin/sitemap*',
                ],
                'permission' => ['view_pages', 'view_pageCategories','view_kpi','view_banner','view_footer','view_footerCategories','view_sitemap'],
            ]);
            $pages_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Pages
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('All Pages'), [
                'route' => 'backend.pages.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 12,
                'activematches' => 'admin/pages*',
                'permission'    => ['edit_pages'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Add Pages
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Add Pages'), [
                'route' => 'backend.pages.create',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 13,
                'activematches' => 'admin/pages*',
                'permission'    => ['edit_pages'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Categories
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Menu'), [
                'route' => 'backend.pageCategories.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 14,
                'activematches' => 'admin/pageCategories*',
                'permission'    => ['edit_pageCategories'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
             // Submenu: Categories
             $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Kpi'), [
                'route' => 'backend.kpi.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 15,
                'activematches' => 'admin/kpi*',
                'permission'    => ['edit_kpi'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Banner
             $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Pages Banner'), [
                'route' => 'backend.banner.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 16,
                'activematches' => 'admin/banner*',
                'permission'    => ['edit_banner'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
                // Submenu: Categories
                $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Footer'), [
                    'route' => 'backend.footer.index',
                    'class' => 'nav-item',
                ])
                ->data([
                    'order'         => 17,
                    'activematches' => 'admin/footer*',
                    'permission'    => ['edit_footer'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
                // Submenu: Categories
             $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Footer Links'), [
                'route' => 'backend.footerCategories.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 18,
                'activematches' => 'admin/footerCategories*',
                'permission'    => ['edit_footerCategories'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
              // Submenu: Sitemap
             $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Sitemap'), [
                'route' => 'backend.sitemap.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 19,
                'activematches' => 'admin/sitemap*',
                'permission'    => ['edit_sitemap'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
