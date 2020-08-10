<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <h1> Editez votre article </h1>


        <form class="w-75 m-auto" action="index.php?controller=article&action=postEditArticle&id=<?= $article->getId() ?>" method="post">
            <div class="form-group mt-5">
                <label for="title">Titre de votre article</label>
                <input class="form-control w-75" type="text" name="title" value="<?= $article->getTitle() ?>">
            </div>

            <div class="form-group">
                <label for="content">Contenu de votre article</label>
                <textarea class="form-control w-75" rows="15"  name="content"><?= $article->getContent() ?> </textarea>
            </div>

            <div class="form-group">
                <label for="author">Auteur</label>
                <input class="form-control w-75" type="textarea" name="author" value="<?= $article->getAuthor() ?>">
            </div>
            <button class="btn btn-primary" type="submit"> Envoyer Article</button>
        </form>
    </body>
</html>