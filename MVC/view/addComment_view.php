<html>
    <?php   require_once('parts\meta.html'); 
            require_once('MVC\view\parts\header.php'); ?>
    <body>
        <h1>new comment</h1>
        <form class="w-75 m-auto" action="index.php?controller=comment&action=postComment&id=<?php echo $_GET['id'];  ?>" method="post">
            <div class="form-group mt-5">
                <label for="pseudo">Pseudo</label>
                <input class="form-control w-75" type="text" name="pseudo">
            </div>
            <div class="form-group">
    <label for="exampleFormControlSelect1">Note de l'article</label>
    <select class="form-control w-75" id="note" name="note">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
            <div class="form-group">
                <label for="content">Contenu de votre commentaire</label>
                <textarea class="form-control w-75" rows="15"  name="content"></textarea>
            </div>
            <button class="btn btn-primary" type="submit"> Envoyer commentaire</button>
        </form>
    </body>
</html>