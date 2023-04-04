<?php 
require_once "./database.php";
if (isset($_POST["matiere"],$_POST["coefficient"])){
  $matiere = ucfirst($_POST["matiere"]);
  $coefficient = $_POST["coefficient"];
  $requet = "INSERT INTO `matiere`(`nom_matiere`, `coefficient`) VALUES (:matiere,:coefficient)";
  $execute = $connect->prepare($requet);
  $execute->bindValue(":matiere",$matiere,PDO::PARAM_STR);
  $execute->bindValue(":coefficient",$coefficient,PDO::PARAM_STR);
  $execute->execute();
  $resdivt = $execute->fetchAll();
  header("Location: matcoef.php");
//   if ($resdivt){
//     session_start();
   
//    ;
//   }

}
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
    <?php $requete = $connect->query("SELECT * FROM `matiere`"); 
    ?>
    <form action="" class="form1" method="POST">
        <label for="">matiere</label>
        <input type="text" placeholder="matiere" name="matiere"/><br>
        <label for="">coefficient</label>
        <input type="number" placeholder="coef" name="coefficient"><br>
        <button type="submit">ajouter</button>
    </form>
        <div class="matcoef">
            <span >
                <?php  while($rst=$requete->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="essaie">
                    <div class="essaie_content">
                     <h5>nom de matiere :</h5><h3><?= $rst["nom_matiere"]?></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <h5>coefficient :</h5><h3><?= $rst["coefficient"]?></h3>
                </div>
                </div>
                <?php endwhile; ?>
                
            </span>
        </div>
</body>
</html>