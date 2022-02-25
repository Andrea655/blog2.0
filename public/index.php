<?php

require '../vendor/autoload.php';



//$router = new AltoRouter();
$router = new App\Router(dirname(__DIR__) . '/views');
$router
        ->get('/blog','/post/index', 'blog');
        ->get('/blog/category','/category/show','category');
         ->run();


<html>
      
   require '../views/layouts/default.php';
<body>
  
  
  
<form action="../test.php" method="post">
    <div>
        <label for="name">Nom utilisateur:</label>
        <input type="text" id="name" name="pseudo">
    </div>
     <div>
        <label for="name">Prenom utilisateur:</label>
        <input type="text" id="name" name="pseudo">
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input type = "password" id="mdp" name="mdp"></input>
    </div>
  
    <div class="button">
        <button type="submit">Inscription</button>
    </div>
      
</body>
</form>

</html>
