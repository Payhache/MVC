<?php

class ArticleController {

    
    public function detailArticle($id) {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOneArticle($id);
        require('MVC\view\detailArticle_view.php');
    }
    
    public function deleteArticle($id) {
        $articleManager = new ArticleManager();
        $articleManager->deleteOneArticle($id);
        require('MVC\view\home_view.php');
    }
}