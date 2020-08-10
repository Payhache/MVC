<html>

<head>
    <?php require_once('parts\meta.html'); ?>
</head>

<body>
    <a class="btn btn-secondary m-2" href="index.php?controller=article&action=writeArticle"> Ajouter un Article</a>
    <h1 class="m-5 text-center"> Mon super blog !</h1>
    <div class="containair  m-auto  w-75">
    <?php foreach ($articles as $article) { ?>
            <h2 class="mt-5"><?= $article->getTitle(); ?></h2>
            <p><?= $article->getcontent(); ?></p>
            <p><?= $article->getAuthor(); ?></p>
            <a class="btn btn-primary m-2" href="index.php?controller=detail&id=<?= $article->getId() ?>">Detail article</a>
            <a class="btn btn-primary m-2 " href="index.php?controller=article&action=editArticle&id=<?= $article->getId() ?>">Editer l'article</a>
            <a class="btn btn-danger m-2 " href="index.php?controller=home&action=delete&id=<?= $article->getId() ?>">Supprimer article</a>
            <?php }; ?>
        </div>

</body>

</html>