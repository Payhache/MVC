<?php

class CommentController {
    public function viewAllComments($id) {
        $commentManager = new CommentManager();
        $comments = $commentManager->selectAllComments($id); 
        require_once('MVC\view\comment_view.php');
    }

    public function writeComment() {
       require_once('MVC\view\addComment_view.php');
    }

    public function postComment($idArticle) {
        $comment = new Comment($_POST['pseudo'], $_POST['content'], $_POST['note'], $idArticle);
        $commentManager = new CommentManager();
        $commentManager->postComment($comment);

        header('Location: index.php?controller=detail&id='.$idArticle);
    }

    public function displayStars($stars){
        for ($i=0; $i < $stars->getNote() ; $i++) { 
            echo('<i class="fas fa-star"></i>');
        }
        for ($i = $stars->getNote() ; $i < 5 ; $i++) { 
            echo('<i class="far fa-star"></i>');
        }
    }
}