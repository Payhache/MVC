<div class="container">
    <a class="btn btn-primary mt-5 mb-5"href="index.php?controller=comment&action=writeComment&id=<?php echo $_GET['id'];  ?>">Poster un nouveau commentaire</a>
</div>

<div class="container">
    <?php foreach($comments as $comment) { ?>
        <div class="comment">

            <div class="test">
                <h2 class="author"><i class="fas fa-user-edit"></i> Commentaire rédigé par <span><?php echo $comment->getPseudo(); ?></span></h2> 
            </div>
            <div class="starsContainer">
               <p> Note :  <span class="stars"><?php $this->displayStars($comment); ?></span> </p>
            </div>

            <div class="commentContent">
                <p > <?php echo $comment->getContent(); ?></p>
            </div>
        </div>
    <?php } ?>
</div>
