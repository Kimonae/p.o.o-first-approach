<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamallows :3</title>
    <link rel="icon" href="img/cha.png" />
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</head>
<body>

<center>
<h3> Bienvenue sur Chamallows :3 <h3>
    <h4>Comblez votre coeur, avec des annonces. <h4>
</center>
  
<div id="login">
<a href="login.php">
<input type="button" value="Connexion" />
</a>
</div>





<?php
require_once("connexion.php");
require_once("produitspoo.php");

$sql ="SELECT id, titre, photo, description, categorie, prix, datepublication, lieu FROM produits";
$query = $db->prepare($sql);
$query->execute();

echo "<div class ='border border-dark-1 w-25 container'>";
echo "<div class ='annonce'>";
while($d = $query->fetch())  {

echo "<div class='titre'>" .$d['titre'] . "</div>";
echo "<div class='photo'>" .$d['photo'] . "</div>";
echo "<div class='cat'>" .$d['categorie'] . "</div>";
echo "<div class='description'>" .$d['description'] . "</div>";
echo "<div class='prix'>" .$d['prix'] .$d['lieu'] . "</div>";
echo "<div class='date'>" .$d['datepublication'] . "</div>";
}

echo "</div>";
echo "</div>";





?>
</body>
</html>