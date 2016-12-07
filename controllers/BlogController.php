<?php

class BlogController{
    
    public function actionindex(){
        
        require_once ROOT.'/views/blog/index.php';
        return true;
    }
}
