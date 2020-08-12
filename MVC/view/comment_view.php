<div class="container">
    <a class="btn btn-primary mt-5 mb-5"href="index.php?controller=comment&action=writeComment">Poster un nouveau commentaire</a>
</div>

<div class="container">
    <?php foreach($comments as $comment) { ?>
        <h2> Commentaire rédigé par <?php echo $comment->getPseudo(); ?></h2>
        <p> <?php echo $comment->getContent(); ?></p>
    <?php } ?>
</div>
