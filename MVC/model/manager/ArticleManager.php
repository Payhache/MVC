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
}