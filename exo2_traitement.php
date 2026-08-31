<html>
<head>
<title>Traitement dons</title>
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
Merci pour votre don
</div>

<div class="menu">
<a href="index.php">Accueil</a>
<a href="exo1_index.php">Exercice 1 : ACHAT</a>
<a href="exo2_formulaire.php">Exercice 2 : DONS</a>
</div>

<div class="bas">

<?php
$ligne = $_GET["nom"] . " | " . $_GET["age"] . " | " . $_GET["mail"] . " | " . $_GET["don"] . "\n";
file_put_contents("resultats.txt", $ligne, FILE_APPEND);

echo "Nom : " . $_GET["nom"] . "<br>";
echo "Age : " . $_GET["age"] . "<br>";
echo "Mail : " . $_GET["mail"] . "<br>";
echo "Don : " . $_GET["don"] . " €<br>";
?>

<br>
<a href="exo2_formulaire.php">Retour</a>
<a href="exo2_resultats.php">Voir les resultats</a>

</div>

</body>
</html>