<?php
require_once "./database.php";
if (isset($_POST["name"])){
$name = $_POST['name'];
$requet = $connect->query("SELECT * FROM `matiere`"); 
$requete = "SELECT * FROM `eleve` WHERE nom_eleve = :nom_eleve"; 
$execute = $connect->prepare($requete);
$execute->bindValue(":nom_eleve",$name,PDO::PARAM_STR);
$execute->execute();
$result = $requet->fetch(PDO::FETCH_ASSOC);
$result1 = $execute->fetch(PDO::FETCH_ASSOC);




}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form action="" method="POST">
    <input type="text" name="name">
    <button type="submit">soumettre</button>
   </form>
    <div >
        <div class="info"><strong> Classe : </strong> Licence 2 <strong>&nbsp;Genie Informatique</strong></div>

        <div class="nom_de_l_eleve">
        <?php while($result1):?>
        <div>Nom et prenom : <strong> <?php echo $result1["nom_eleve"] ?> </strong></div>
        <?php endwhile ; ?>
        <div>Date et Lieu De Naissance : <span>27/03/2001 </span><strong> MOUILA</strong></div>
        
    </div>
    <div class="titre">
        <h3>Matiere</h3>
        <h3>Coefficient</h3>
        <h3>Moyenne</h3>
        <h3>Appreciation</h3>
    </div>
    <?php while($result && $result1):?>
    <div class="contenu">
        <div class="matiere"><?php echo $result1["nom_matiere"] ?></div>
        <div class="coefficient"><?php echo $result["coefficient"] ?></div>
        <div class="moyenne">
       
            <?php echo $result["note_eleve"];?>
       
        </div>
        <div class="appreciation">Excelent</div>
    </div>
   
    <?php endwhile ; ?>
       
            
            
        
        
    </div>
</body>
</html>