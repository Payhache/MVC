 <?php
require_once('require.php');

    if (empty($_GET)) {
        $articleControleur = new DefaultController();
        $articleControleur->home();

    } else if ($_GET['controller'] === 'detail' && isset($_GET['id'])) {
        $articleControleur = new ArticleController();
        $articleControleur->detailArticle($_GET['id']);
    
    } else if ($_GET['controller'] === 'home' && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $articleControleur = new ArticleController();
        $articleControleur->deleteArticle($_GET['id']);
    }
