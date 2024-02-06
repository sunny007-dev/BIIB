<?php

namespace Modules\Approval\Http\Middleware;

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
            $approval_menu = $menu->add('<i class="nav-icon fas fa-file-alt"></i> '.__('Certifications & Awards'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 12,
                'activematches' => [
                    'admin/certified*',
                    'admin/certifiedType*',
                ],
                'permission' => ['view_certified', 'view_certifiedType'],
            ]);
            $approval_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $approval_menu->add('<i class="fa fa-arrow-right"></i>'.__('Certificate'), [
                'route' => 'backend.certified.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 13,
                'activematches' => 'admin/certified*',
                'permission'    => ['edit_certified'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Categories
            $approval_menu->add('<i class="fa fa-arrow-right"></i>'.__('Certificate Type'), [
                'route' => 'backend.certifiedType.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 14,
                'activematches' => 'admin/certifiedType*',
                'permission'    => ['edit_certifiedType'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
             // Submenu: Categories
             $approval_menu->add('<i class="fa fa-arrow-right"></i>'._('Awards'), [
                'route' => 'backend.award.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 15,
                'activematches' => 'admin/award*',
                'permission'    => ['edit_award'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
