<?php 

class CommentManager extends DbManager {
    
    public function __construct() {
        parent::__construct();
    }

    public function selectAllComments($id) {
        $comments = [];
        $sqlRequestSelectAllComments = $this->bddConnection->prepare('SELECT comments.pseudo, comments.content, comments.id, comments.idArticle FROM comments
        LEFT JOIN articles ON articles.id = comments.idArticle WHERE articles.id = ?');
        $sqlRequestSelectAllComments->bindParam(1, $id);
        $sqlRequestSelectAllComments->execute();
        $result = $sqlRequestSelectAllComments->fetchAll();
        foreach($result as $comment) {
            $comments[] = new Comment($comment['pseudo'], $comment['content'], $comment['idArticle'], $comment['id']);
        } 
        return $comments;
    }
}