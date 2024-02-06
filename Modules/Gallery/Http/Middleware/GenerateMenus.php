<?php

namespace Modules\Gallery\Http\Middleware;

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

            // Media Dropdown
            $pages_menu = $menu->add('<i class="nav-icon fa fa-camera"></i> '.__('Media'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 20,
                'activematches' => [
                    'admin/gallery*',
                    'admin/news*',
                ],
                'permission' => ['view_gallery', 'view_news'],
            ]);
            $pages_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // // Submenu: Gallery
            $pages_menu->add('<i class="fa fa-arrow-right"></i>'.__('Gallery'), [
                'route' => 'backend.gallery.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/gallery*',
                'permission'    => ['edit_gallery'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: News
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('News & Events'), [
                'route' => 'backend.news.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/news*',
                'permission'    => ['edit_news'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
                // Submenu: Slider
            $pages_menu->add('<i class="fa fa-arrow-right"></i> '.__('Slider'), [
                'route' => 'backend.slider.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/slider*',
                'permission'    => ['edit_slider'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
