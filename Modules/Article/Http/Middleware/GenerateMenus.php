<?php

namespace Modules\Article\Http\Middleware;

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
            $articles_menu = $menu->add('<i class="nav-icon fa fa-rss-square"></i> '.__('Blogs'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 81,
                'activematches' => [
                    'admin/posts*',
                    'admin/categories*',
                ],
                'permission' => ['view_posts', 'view_categories'],
            ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $articles_menu->add('<i class="fa fa-arrow-right"></i> '.__('Posts'), [
                'route' => 'backend.posts.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/posts*',
                'permission'    => ['edit_posts'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Categories
            $articles_menu->add('<i class="fa fa-arrow-right"></i>'.__('Categories'), [
                'route' => 'backend.categories.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/categories*',
                'permission'    => ['edit_categories'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
             // Submenu: Comments
            $articles_menu->add('<i class="fa fa-arrow-right"></i>'.__('Comments'), [
                'route' => 'backend.comments.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 84,
                'activematches' => 'admin/comments*',
                'permission'    => ['edit_comments'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
                // Submenu: Tags
            $articles_menu->add('<i class="fa fa-arrow-right"></i>'.__('Tags'), [
                'route' => 'backend.tags.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 85,
                'activematches' => 'admin/tags*',
                'permission'    => ['edit_tags'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
