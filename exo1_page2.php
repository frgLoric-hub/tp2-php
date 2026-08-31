<html>
<head>
<title>Recapitulatif</title>
<style>
body { font-family: Arial; margin: 0; }
.haut { background-color: #b39ddb; padding: 10px 15px; color: white; font-size: 22px; display: flex; align-items: center; }
.haut img { height: 60px; margin-right: 15px; }
.menu { background-color: #f8bbd0; padding: 10px 15px; }
.menu a { margin-right: 20px; color: #6a1b9a; font-weight: bold; }
.bas { background-color: #fce4ec; padding: 30px; min-height: 500px; }
</style>
</head>
<body>

<div class="haut">
<img src="elephant.png">
Recapitulatif
</div>

<div class="menu">
<a href="index.php">Accueil</a>
<a href="exo1_index.php">Exercice 1 : ACHAT</a>
<a href="exo2_formulaire.php">Exercice 2 : DONS</a>
</div>

<div class="bas">

<?php
$professeur = $_GET["professeur"];
$cours = $_GET["cours"];
$nombre = $_GET["nombre"];

if ($nombre == "") {
    echo "Les champs suivants n'ont pas été saisis :<br>";
    echo "nombre de cours";
} else {
    echo "Vous avez commandé " . $nombre . " " . $cours . " auprès du professeur " . $professeur;
}
?>

<br><br>
<a href="exo1_index.php">Retour</a>

</div>

</body>
</html>