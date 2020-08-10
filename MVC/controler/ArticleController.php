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

    public function writeNewArticle() {
        require ('MVC\view\addArticle_view.php');
    }

    public function postArticle() {
        $article = new Article($_POST['title'],$_POST['content'],$_POST['author']);
        $articleManager = new ArticleManager();
        $articleManager->postOneArticle($article);

        header('location: index.php');
    }
}