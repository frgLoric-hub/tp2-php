<html>
<head>
<title>Resultats</title>
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
Resultats des dons
</div>

<div class="menu">
<a href="index.php">Accueil</a>
<a href="exo1_index.php">Exercice 1 : ACHAT</a>
<a href="exo2_formulaire.php">Exercice 2 : DONS</a>
</div>

<div class="bas">

<?php
$contenu = file_get_contents("resultats.txt");
$lignes = explode("\n", $contenu);

$totalDon = 0;
$totalAge = 0;
$nombre = 0;

foreach ($lignes as $ligne) {
    $champs = explode("|", $ligne);

    if (count($champs) == 4 && trim($champs[0]) != "" && trim($champs[1]) != "" && trim($champs[3]) != "") {
        echo trim($champs[0]) . " a donné " . trim($champs[3]) . " €<br>";

        $totalDon = $totalDon + trim($champs[3]);
        $totalAge = $totalAge + trim($champs[1]);
        $nombre = $nombre + 1;
    }
}

echo "<br>Somme totale des dons : " . $totalDon . " €<br>";
if ($nombre > 0) {
    echo "Moyenne d'age : " . ($totalAge / $nombre);
}
?>

<br><br>
<img src="exo2_graphique.php">
<br><br>
<a href="exo2_formulaire.php">Retour</a>

</div>

</body>
</html>