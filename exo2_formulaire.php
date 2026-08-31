<html>
<head>
<title>Exercice 2</title>
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
Exercice 2 : DONS
</div>

<div class="menu">
<a href="index.php">Accueil</a>
<a href="exo1_index.php">Exercice 1 : ACHAT</a>
<a href="exo2_formulaire.php">Exercice 2 : DONS</a>
</div>

<div class="bas">

<form action="exo2_traitement.php" method="get">

    Nom : <input type="text" name="nom">
    <br><br>

    Age : <input type="text" name="age">
    <br><br>

    Mail : <input type="text" name="mail">
    <br><br>

    Don (en €) : <input type="text" name="don">
    <br><br>

    <input type="submit" value="Soumettre">

</form>

</div>

</body>
</html>