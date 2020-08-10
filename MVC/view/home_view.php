<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <h1>C'est la HOMMMMMMMEPAGE !</h1>
        <?php foreach($articles as $article) { ?>
            <h2><?= $article->getTitle(); ?></h2>
            <p><?= $article->getcontent(); ?></p>
            <p><?= $article->getAuthor(); ?></p>
            <a href="index.php?controller=detail&id=<?= $article->getId()?>">Detail article</a>
            <a href="index.php?controller=home&action=delete&id=<?= $article->getId()?>">Supprimer article</a>
        <?php }; ?>

    </body>
</html>