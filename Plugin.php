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
            'shopautumn.access_items' => ['label' => 'muukrls.shopautumn::lang.permissions.items'],
            'shopautumn.access_categories' => ['label' => 'muukrls.shopautumn::lang.permissions.categories']
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
                    ],
                    'categories' => [
                        'label'       => 'muukrls.shopautumn::lang.menu.menu_label_categories',
                        'url'         => Backend::url('muukrls/shopautumn/categories'),
                        'icon'        => 'icon-list',
                        'permissions' => ['shopautumn.access_categories'],
                        'order'       => 500,
                    ]
                ]
            ]
        ];
    }
}
