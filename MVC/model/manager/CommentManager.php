<?php 

class CommentManager extends DbManager {
    
    public function __construct() {
        parent::__construct();
    }

    public function selectAllComments($id) {
        $comments = [];
        $sqlRequestSelectAllComments = $this->bddConnection->prepare('SELECT comments.pseudo, comments.content, comments.id, comments.note, comments.idArticle FROM comments
        LEFT JOIN articles ON articles.id = comments.idArticle WHERE articles.id = ? ORDER BY comments.id DESC');
        $sqlRequestSelectAllComments->bindParam(1, $id);
        $sqlRequestSelectAllComments->execute();
        $result = $sqlRequestSelectAllComments->fetchAll();
        foreach($result as $comment) {
            $comments[] = new Comment($comment['pseudo'], $comment['content'], $comment['note'], $comment['idArticle'], $comment['id']);
        } 
        return $comments;
    }

    public function postComment(Comment $comment) {

        $pseudo = $comment->getPseudo();
        $content = $comment->getContent();
        $note = $comment->getNote();
        $idArticle= $comment->getIdArticle();
        $sqlPostComment = $this->bddConnection->prepare('INSERT INTO comments (pseudo, content, note, idArticle) VALUE (?,?,?,?)' );
        $sqlPostComment->bindParam(1, $pseudo);
        $sqlPostComment->bindParam(2, $content);
        $sqlPostComment->bindParam(3, $note);
        $sqlPostComment->bindParam(4, $idArticle);
        $sqlPostComment->execute();
        $comment->setId($this->bddConnection->lastInsertId());
    }
}