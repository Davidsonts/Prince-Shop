<?php

if (!defined('_PS_VERSION_'))
    exit();

include_once(_PS_MODULE_DIR_ . 'price_shop/classes/ProductAccess.php');

class Price_Shop extends Module
{
    public function __construct()
    {
        $this->name = 'price_shop';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Davidson Santos';
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Price Shop', 'price_shop');
        $this->description = $this->l('This module is developed to display an Price', 'price_shop');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?', 'price_shop');
    }

    public function install()
    {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);
    
        return parent::install() &&
            $this->registerHook('DisplayOverrideTemplate');
    }
    
    public function uninstall()
    {
        // if (!parent::uninstall() || !Configuration::deleteByName('price_shop_url'))
        //     return false;
        // return true;
        return parent::uninstall();
    }

    public function hookDisplayOverrideTemplate($params) {
        $controller = $params['controller'];
        
        if ($controller->php_self == 'product') {
            return 'module:price_shop/views/templates/override/product.tpl';
        }
    
        return false;
    }
}    