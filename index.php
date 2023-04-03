<?php
require "./database.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>TD2</h1>
        <?php if (!isset($_SESSION["connecter"]) || $_SESSION["connecter"]["isconnected"] == 0): ?>
            <a href="connexion.php">se connecter</a>
        <?php else:?>
            <a href="deconnexion.php">se deconnecter</a>
        <?php endif; ?>
      

    </header>
    <main>
         <h3></h3>
          <?php if (!isset($_SESSION["connecter"]) || $_SESSION["connecter"]["isconnected"] == 0): ?>
            <h2>bienvenue sur le site officiel du lycée privé MOUSSAVOU </h2> 
        <?php else:?>
            <div class="menu">
                <a href="classe.php">classe</a>
                <a href="eleve.php">eleve</a>
                <a href="matcoef.php">matcoef</a>
            </div>
         <div class="contenue">
         <h2>bienvenue sur le site officiel du lycée privé MOUSSAVOU <?php 
               echo $_SESSION["connecter"]["message"]; 
         ?> </h2> 
         </div>
        <?php endif; ?>
    </main>

    <footer>
       <h6> copyright 2023</h6>
    </footer>

</body>
</html>