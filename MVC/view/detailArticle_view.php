
<html>
    <?php   require_once('parts\meta.html'); 
            require_once('MVC\view\parts\header.php'); ?>
    <body>
        <div class="detailArticle container">
            <h1><?= $article->getTitle() ?></h1>
            <p class="mt-4"><?= $article->getContent() ?></p>
            <h2 class="author"> Article écrit par <?php echo $article->getAuthor() ?></h2>
        </div>
    </body>
</html>
