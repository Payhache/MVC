<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <h1> Racontez nous tout :D</h1>


        <form class="w-75 m-auto" action="index.php?controller=article&action=postArticle" method="post">
            <div class="form-group">
                <label for="title">titre de votre article</label>
                <input class="form-control w-75" type="text" name="title">
            </div>

            <div class="form-group">
                <label for="content">contenu de votre article</label>
                <textarea class="form-control w-75" rows="15"  name="content"></textarea>
            </div>

            <div class="form-group">
                <label for="author">Auteur</label>
                <input class="form-control w-75" type="textarea" name="author">
            </div>
            <button class="btn btn-primary" type="submit"> Envoyer Article</button>
        </form>
    </body>
</html>





