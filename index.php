 <?php
    require_once('require.php');

    $commentController = new CommentController();
    $articleControleur = new ArticleController();
    
    if (empty($_GET)) {
        $articleControleur = new DefaultController();
        $articleControleur->home();

    } else if ($_GET['controller'] === 'detail' && isset($_GET['id'])) {
        $articleControleur->detailArticle($_GET['id']);
        $commentController->viewAllComments($_GET['id']);
    
    } else if ($_GET['controller'] === 'home' && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $articleControleur->deleteArticle($_GET['id']);
        
    } else if ($_GET['controller'] === 'article' && $_GET['action'] === 'writeArticle') {
        $articleControleur->writeNewArticle();

    } else if ($_GET['controller'] === 'article' && $_GET['action'] === 'postArticle') {
        $articleControleur->postArticle();

    } else if ($_GET['controller'] === 'article' && $_GET['action'] === 'editArticle' && isset($_GET['id'])) {
        $articleControleur->editArticle($_GET['id']);

    } else if ($_GET['controller'] === 'article' && $_GET['action'] === 'postEditArticle' && isset($_GET['id'])) {
        $articleControleur->postEditArticle($_GET['id']);

    } else if ($_GET['controller'] === 'comment' && $_GET['action'] === 'writeComment') {
        $commentController->writeComment();

    } else if ($_GET['controller'] === 'comment' && $_GET['action'] === 'postComment' && isset($_GET['id'])) {
        $commentController->postComment($_GET['id']);
    }
    
