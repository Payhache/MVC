
<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <h1><?= $article->getTitle() ?></h1>
        <p><?= $article->getContent() ?></p>
        <h2> Article écrit par <?php echo $article->getAuthor() ?></h2>


    </body>
</html>
