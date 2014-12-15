<?php

namespace Muukrls\Shopautumn\Classes;

use Illuminate\Foundation\Application;
use Illuminate\Validation\Validator;

class ShopValidator extends Validator
{
    public function validatePrice($attr, $value, $params)
    {
        return (preg_match('/^\d{1,8}(\.\d{1,4})?$/', $value));
    }

    public static function register(Application $app)
    {
        $app['validator']->resolver(function($translator, $data, $rules, $messages)
        {
            return new ShopValidator($translator, $data, $rules, $messages);
        });
    }
}
