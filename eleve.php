<?php 
require_once "./database.php";
if (isset($_POST["matiere"],$_POST["note"],$_POST["eleve"])){
  $matiere = ucfirst($_POST["matiere"]);
  $note = $_POST["note"];
  $eleve = $_POST["eleve"];
  $requet = "INSERT INTO `eleve`(`nom_matiere`, `note_eleve`, `nom_eleve`) VALUES (:nom_matiere,:note_eleve,:nom_eleve)";
  $execute = $connect->prepare($requet);
  $execute->bindValue(":nom_matiere",$matiere,PDO::PARAM_STR);
  $execute->bindValue(":note_eleve",$note,PDO::PARAM_STR);
  $execute->bindValue(":nom_eleve",$eleve,PDO::PARAM_STR);
  $execute->execute();
  $resdivt = $execute->fetchAll();
  header("Location: eleve.php");
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
</head>
<body>
    <form action="" method="POST">
        <select name="eleve" id="" ><option value="loan">loan</option></select>
        <select name="matiere" id=""><option value="Mathematique">Mathemaique</option>
            <option value="Francais">Francais</option>
            <option value="EPS">EPS</option>
            <option value="GH">GH</option>
            <option value="Espagnol">Espagnol</option>
            <option value="Anglais">Anglais</option>
            <option value="Philosophie">Philosophie</option>
            <option value="SVT">SVT</option>
            <option value="Physique_Chimie">Physique_Chimie</option>
            <option value="Bureautique">Bureautique</option>
            
        </select><br>
        <input type="number" name="note">
       <button type="submit">Enregistrer</button>
    </form>
</body>
</html>