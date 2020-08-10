<html>

<head>
    <?php require_once('parts\meta.html'); ?>
</head>

<body>
    <a href="index.php?controller=article&action=writeArticle"><button>Ajouter un article</button></a>
    <h1>C'est la HOMMMMMMMEPAGE !</h1>
    <?php foreach ($articles as $article) { ?>
        <h2><?= $article->getTitle(); ?></h2>
        <p><?= $article->getcontent(); ?></p>
        <p><?= $article->getAuthor(); ?></p>
        <a class="btn btn-primary m-2" href="index.php?controller=detail&id=<?= $article->getId() ?>">Detail article</a>
        <a class="btn btn-primary m-2 " href="index.php?controller=home&action=delete&id=<?= $article->getId() ?>">Supprimer article</a>
        <a class="btn btn-primary m-2 " href="index.php?controller=article&action=editArticle&id=<?= $article->getId() ?>">Editer l'article</a>
    <?php }; ?>

</body>

</html>