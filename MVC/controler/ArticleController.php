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
        $errors = $this->checkForm();
        if(!count($errors)) {
        $articleManager->postOneArticle($article);
        header('location: index.php');
        } else {
            require_once('MVC\view\addArticle_view.php');
        }
    }

    public function editArticle($id) {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOneArticle($id);
        require('MVC\view\editArticle_view.php');
    }

    public function postEditArticle($id) {
        $articleManager= new ArticleManager();
        $article = $articleManager->selectOneArticle($id);
        $errors = $this->checkForm();
        if(!count($errors)) {
            $article->setTitle($_POST['title']);
            $article->setContent($_POST['content']);
            $article->setAuthor($_POST['author']);
            $articleManager->updateArticle($article);
            header('location: index.php');
        } else {
            require_once('MVC\view\editArticle_view.php');
        }
    }

    public function checkform() {
        $errors = [];
        if(empty($_POST['title'])) {
            $errors[] = '- Il faut remplir un titre';
        }
        if(empty($_POST['content'])) {
            $errors[] = '- Votre article ne peut pas être vide';
        }
        if(empty($_POST['author'])) {
            $errors[] = '- Vous devez signer votre article';
        }


        return $errors;
    }

    public function displayErrors($errors) {
        foreach ($errors as $error) {
            echo($error);
        }
    }
}