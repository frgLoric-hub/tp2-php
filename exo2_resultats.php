<html>
<head>
<title>TP2</title>
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
TP2 - Exercice 2 : DONS
</div>

<div class="menu">
<a href="index.php">Accueil</a>
<a href="exo1_index.php">Exercice 1 : ACHAT</a>
<a href="exo2_formulaire.php">Exercice 2 : DONS</a>
</div>

<div class="bas">

<h2>Resultats des dons</h2>

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
<div style="background:white; border:2px solid #4FC3E8; border-radius:12px; padding:15px; display:inline-block;">
    <h3 style="margin:0 0 10px 0;">Line / Area</h3>
    <img src="exo2_graphique.php">
</div>
<br><br>

<a href="exo2_formulaire.php">Retour</a>

</div>
</body>
</html>