<html>
    <?php   require_once('parts\meta.html'); 
            require_once('MVC\view\parts\header.php'); ?>
<body>
    <h1 class="m-5 text-center"> Mon super blog !</h1>
    <div class="article containair  m-auto  w-75">
    <?php foreach ($articles as $article) { ?>
        <div class="detailArticle">
            <h2 class="mt-5"><?= $article->getTitle(); ?></h2>
            <p class="mt-4"><?= $article->getcontent(); ?></p>
            <p class="author"><?= $article->getAuthor(); ?></p>
            <a class="btn btn-info m-2 float-right" href="index.php?controller=detail&id=<?= $article->getId() ?>">Detail article</a>
            <a class="btn btn-primary m-2 " href="index.php?controller=article&action=editArticle&id=<?= $article->getId() ?>">Editer l'article</a>
            <a class="btn btn-danger m-2 " href="index.php?controller=home&action=delete&id=<?= $article->getId() ?>">Supprimer article</a>
        </div>
            <?php }; ?>
        </div>

</body>

</html>