<?php

require_once ROOT.'/models/Category.php';
require_once ROOT.'/models/Product.php';

class CatalogController{
	
	public function actionIndex(){
		
		$categories = array();
        $categories = Category::getCategoriesList();
        
        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(12);
        
        require_once ROOT.'/views/catalog/index.php';
		
        return true;
	}
	
	public function actionCategory($categoryId){
		
		$categories = array();
        $categories = Category::getCategoriesList();
        
        $categoryProducts = array();
        $categoryProducts = Product::getProductListByCategory($categoryId);
        
        require_once ROOT.'/views/catalog/category.php';
		
        return true;
	}
	
}