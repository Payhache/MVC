<html>
    <?php   require_once('parts\meta.html'); 
            require_once('MVC\view\parts\header.php'); ?>

<body>

    <h1> Ajoutez un article</h1>
    <div class="container text-center text-danger">
        <?php
        if (!empty($_POST)) {
            if (count($errors)) {
                $this->displayErrors($errors);
            }
        }
        ?>
    </div>


    <form class="w-75 m-auto" action="index.php?controller=article&action=postArticle" method="post">
        <div class="form-group mt-5">
            <label for="title">Titre de votre article</label>
            <input class="form-control w-75" type="text" name="title" value="
            <?php
            if (!empty($_POST)) {
                echo $_POST['title'];
            } ?>">
        </div>
        <div class="form-group">
            <label for="content">Contenu de votre article</label>
            <textarea class="form-control w-75" rows="15" name="content">
                <?php if (!empty($_POST)) {
                    echo $_POST['content'];
                } ?>
            </textarea>
        </div>

        <div class="form-group">
            <label for="author">Auteur</label>
            <input class="form-control w-75" type="textarea" name="author" value="
            <?php
            if (!empty($_POST)) {
                echo $_POST['author'];
            } ?>">
        </div>
        <button class="btn btn-primary" type="submit"> Envoyer Article</button>
    </form>
</body>

</html>