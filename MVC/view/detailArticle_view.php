
<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
    <a class="btn btn-secondary m-2" href="index.php"> Retour accueil</a>
        <div class="container">
            <h1><?= $article->getTitle() ?></h1>
            <p><?= $article->getContent() ?></p>
            <h2> Article écrit par <?php echo $article->getAuthor() ?></h2>
        </div>
        <div class="container">
            <?php foreach($comments as $comment) { ?>
                <h2><?php echo $comment->getPseudo(); ?></h2>
            <?php } ?>
        </div>
    </body>
</html>
