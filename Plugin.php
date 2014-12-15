<?php

namespace Muukrls\Shopautumn;

use Backend;
use System\Classes\PluginBase;
use Muukrls\Shopautumn\Classes\ShopValidator;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Shop Autumn',
            'description' => 'A shopping cart and payment plugin.',
            'author'      => 'Muukrls',
            'icon'        => 'icon-shopping-cart'
        ];
    }

    public function boot()
    {
        ShopValidator::register($this->app);
    }

    public function registerPermissions()
    {
        return [
            'shopautumn.access_items' => ['label' => 'muukrls.shopautumn::lang.permissions.items']
        ];
    }

    public function registerNavigation()
    {
        return [
            'shop' => [
                'label'       => 'muukrls.shopautumn::lang.menu.menu_label',
                'url'         => Backend::url('muukrls/shopautumn/items'),
                'icon'        => 'icon-shopping-cart',
                'permissions' => ['shopautumn.*'],
                'order'       => 500,

                'sideMenu'    => [
                    'items' => [
                        'label'       => 'muukrls.shopautumn::lang.menu.menu_label_items',
                        'url'         => Backend::url('muukrls/shopautumn/items'),
                        'icon'        => 'icon-shopping-cart',
                        'permissions' => ['shopautumn.access_items'],
                        'order'       => 500,
                    ]
                ]
            ]
        ];
    }
}
