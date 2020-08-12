<html>
    <head>
        <?php require_once('parts\meta.html'); ?>
    </head>
    <body>
        <a class="btn btn-secondary m-2" href="index.php"> Retour accueil</a>
        <h1>new comment</h1>
        <form class="w-75 m-auto" action="index.php?controller=comment&action=postComment" method="post">
            <div class="form-group mt-5">
                <label for="pseudo">Pseudo</label>
                <input class="form-control w-75" type="text" name="pseudo">
            </div>
            <div class="form-group">
                <label for="content">Contenu de votre commentaire</label>
                <textarea class="form-control w-75" rows="15"  name="content"></textarea>
            </div>
            <button class="btn btn-primary" type="submit"> Envoyer commentaire</button>
        </form>
    </body>
</html>