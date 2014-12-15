<?php

namespace Muukrls\Shopautumn\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Items extends Controller
{
    public $implement =  [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Muukrls.Shopautumn', 'shop', 'items');
    }
}
