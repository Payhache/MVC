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
        $comment = new Comment($_POST['pseudo'], $_POST['content'], $idArticle);
        $commentManager = new CommentManager();
        $commentManager->postComment($comment);

        header('Location: index.php?controller=detail&id='.$idArticle);
    }
}