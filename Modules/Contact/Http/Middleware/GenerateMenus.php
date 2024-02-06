<?php

namespace Modules\Contact\Http\Middleware;

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

            // contacts Dropdown
            $contact_menu = $menu->add('<i class="nav-icon fa fa-users"></i> '.__('Contact'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 81,
                'activematches' => [
                    'admin/contact*',
                    'admin/address*',
                    'admin/enquiry*',
                    'admin/interest*'
                ],
                'permission' => ['view_address', 'view_contact', 'view_enquiry', 'view_interest'],
            ]);
            $contact_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Contacts
            $contact_menu->add('<i class="fa fa-arrow-right"></i>'.__('Contact'), [
                'route' => 'backend.contact.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/contact*',
                'permission'    => ['edit_contact'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            $contact_menu->add('<i class="fa fa-arrow-right"></i>'.__('Address'), [
                'route' => 'backend.address.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/address*',
                'permission'    => ['edit_address'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Enquiry
            // $contact_menu->add('<i class="fa fa-arrow-right"></i>'.__('Enquiry'), [
            //     'route' => 'backend.enquiry.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 84,
            //     'activematches' => 'admin/enquiry*',
            //     'permission'    => ['edit_enquiry'],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link',
            // ]);

              // Submenu: Interest
              $contact_menu->add('<i class="fa fa-arrow-right"></i>'.__('Interest'), [
                'route' => 'backend.interest.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 85,
                'activematches' => 'admin/interest*',
                'permission'    => ['edit_interest'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
