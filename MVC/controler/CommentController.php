<?php

class CommentController {
    public function viewAllComments($id) {
        $commentManager = new CommentManager();
        $comments = $commentManager->selectAllComments($id);
        require_once('MVC\view\detailArticle_view.php');
    }
}