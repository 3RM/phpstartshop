<?php

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class SiteController{
    
    public function actionindex(){
        
        $categoryList = array();
        $categoryList = Category::getCategoriesList();
        
        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(6);
        
        require_once ROOT.'/views/site/index.php';
        return true;
    }
}
