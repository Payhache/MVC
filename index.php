 <?php 
 require_once('require.php');

 if(empty($_GET)) {
     $articleControleur = new DefaultController();
     $articleControleur->home();
 }
 
