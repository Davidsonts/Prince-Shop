<?php

use PrestaShop\PrestaShop\Adapter\ServiceLocator;
use PrestaShop\PrestaShop\Core\Product\ProductInterface;

class ProductAccess extends ObjectModel
{
    public static function getValuePrince($id){
        $sql = 'SELECT price FROM '._DB_PREFIX_.'product WHERE id_product = '.$id.'';
        
        $customVal = Db::getInstance()->getValue($sql);

        $result = $customVal / 10;

        $result = str_replace(".", ",", $result);

        return $result;
    }

}    