<?php

class DefaultController {
    public function home() {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAllArticles();
        require_once('MVC\view\home_view.php');
    }
}