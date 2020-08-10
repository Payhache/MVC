<?php 
class ArticleManager extends DbManager {

    public function __construct() {
        parent::__construct();
    }

    public function selectAllArticles() {
        $articles = [];
        $sqlRequestSelectAllArticles = 'SELECT * FROM articles';
        foreach($this->bddConnection->query($sqlRequestSelectAllArticles) as $article) {
            $articles[] = new Article ($article['title'], $article['content'], $article['author'], $article['id']);
        }
        return $articles;
    }

    public function selectOneArticle($id) {
        $sqlRequestOneArticle = $this->bddConnection->prepare('SELECT * FROM articles WHERE id = ?');
        $sqlRequestOneArticle->bindParam(1, $id);
        $sqlRequestOneArticle->execute();
        $resultSqlRequestOneArticle = $sqlRequestOneArticle->fetch();
        $article = new Article($resultSqlRequestOneArticle['title'], $resultSqlRequestOneArticle['content'], $resultSqlRequestOneArticle['author'], $resultSqlRequestOneArticle['id']);
        
        return $article;
    }

    public function deleteOneArticle($id) {
        $sqlRequestOneArticle = $this->bddConnection->prepare('DELETE FROM articles WHERE id = ?');
        $sqlRequestOneArticle->bindParam(1, $id);
        $sqlRequestOneArticle->execute();
    }

    public function postOneArticle($article) {
        $title = $article->getTitle();
        $content = $article->getContent();
        $author = $article->getAuthor();
        $sqlPostOneArticle = $this->bddConnection->prepare('INSERT INTO articles (title, content, author) VALUE (?,?,?)');
        $sqlPostOneArticle->bindParam(1, $title);
        $sqlPostOneArticle->bindParam(2, $content);
        $sqlPostOneArticle->bindParam(3, $author);
        $sqlPostOneArticle->execute();
        $article->setId($this->bddConnection->lastInsertId());

    }
}