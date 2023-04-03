<?php 
require_once "./database.php";
if (isset($_POST["Email"],$_POST["Password"])){
  $Email = $_POST["Email"];
  $Password = $_POST["Password"];
  $requet = "SELECT * FROM `user` WHERE `Email` = :Email ";
  $execute = $connect->prepare($requet);
  $execute->bindParam(":Email", $Email);
  $execute->execute();
  $result = $execute->fetchAll();
  if ($result){
    session_start();
    $_SESSION["connecter"] = [
      "isconnected" => 1,
      "message" => " Monsieur Boulingui "
    ];
    header("Location: index.php");
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion en HTML & CSS - Frenchcoder</title>
  <link rel="stylesheet" href="connexion.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <form class="form2" method="post">
     
    <h1>Se connecter</h1>
   
    <p class="choose-email">veuillez entrer vos informations :</p>
    
    <div class="inputs">
      <input type="email" placeholder="Email" name="Email">
      <input type="password" placeholder="Mot de passe" name="Password">
    </div>
    
   
    <div align="center">
      <button type="submit">Se connecter</button>
    </div>
  </form>
</body>
</html>
