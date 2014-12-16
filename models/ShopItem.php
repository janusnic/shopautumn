<?php

namespace Muukrls\Shopautumn\Models;

use Model;
use October\Rain\Database\Traits\Validation;

class ShopItem extends Model
{
    use Validation;

    public $table = 'muukrls_shopautumn_items';

    public $rules = [
        'name' => 'required|max:255',
        'price' => 'required|price'
    ];

    public $attachMany = [
        'images' => ['System\Models\File']
    ];

    public $belongsToMany = [
        'categories' => [
            'Muukrls\Shopautumn\Models\Category',
            'table' => 'muukrls_shopautumn_item_categories',
            'primaryKey' => 'item_id',
            'foreignKey' => 'category_id'
        ]
    ];
}
