<?php 
var_dump($article);
?>

<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <h1>Vue du Détail</h1>
        <h2> Article écrit par <?php echo $article->getAuthor() ?></h2>
    </body>
</html>
