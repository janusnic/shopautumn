<?php

namespace Muukrls\Shopautumn\Models;

use Model;
use October\Rain\Database\Traits\Validation;

class Category extends Model
{
    use Validation;
    
    public $table = 'muukrls_shopautumn_categories';

    public $rules = [
        'name' => 'required|max:255'
    ];
    
    public $hasMany = [
        'items' => ['Muukrls\Shopautumn\Models\ShopItem', 'table' => 'muukrls_shopautumn_item_categories']
    ];
}