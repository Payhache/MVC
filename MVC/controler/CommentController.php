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

    public function postComment() {
        $comment = new Comment($_POST['pseudo'], $_POST['content']);
        $commentManager = new CommentManager();
        $commentManager->postComment($comment);

        header('location: index.php');
    }
}