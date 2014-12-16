<?php

namespace Muukrls\Shopautumn\Controllers;

use Backend\Classes\Controller;

class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];
    
    public $listConfig = "config_list.yaml";
    public $formConfig = "config_form.yaml";
    
    public $requiredPermissions = ['shopautumn.access_categories'];
    
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Muukrls.Shopautumn', 'shop', 'categories');
    }
}