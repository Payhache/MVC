<div class="container">
    <?php foreach($comments as $comment) { ?>
        <h2> Commentaire rédigé par <?php echo $comment->getPseudo(); ?></h2>
        <p> <?php echo $comment->getContent(); ?></p>
    <?php } ?>
</div>
