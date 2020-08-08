<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <h1>C'est la HOMMMMMMMEPAGE !</h1>
        <?php foreach($articles as $article) { ?>
            <h2><?php echo $article->getTitle();?></h2>
            <p><?php echo $article->getcontent(); ?></p>
            <p><?php echo $article->getAuthor(); ?></p>
            <a href="MVC\view\detailArticle_view.php?controller=detail&id=<?php echo $article->getId()?> ">TEST</a>
        <?php }; ?>

    </body>
</html>