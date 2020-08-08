 <?php
    require_once('require.php');

    if (empty($_GET)) {
        $articleControleur = new DefaultController();
        $articleControleur->home();
        
    } else if ($_GET['controller'] === 'detail' && isset($_GET['id'])) {
        $articleControleur = new ArticleController();
        $articleControleur->detailArticle($id);
    }
