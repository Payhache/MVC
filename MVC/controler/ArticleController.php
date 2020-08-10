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
        header('Location: index.php');
    }
}