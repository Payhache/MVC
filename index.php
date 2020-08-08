 <?php 
 require_once('require.php');

 
 $bddConnected = new ArticleManager(); 
 var_dump($bddConnected->selectAllArticles());