<?php
include("exo1_cours.php");
?>
<html>
<head>
<title>Exercice 1</title>
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
Exercice 1 : ACHAT
</div>

<div class="menu">
<a href="index.php">Accueil</a>
<a href="exo1_index.php">Exercice 1 : ACHAT</a>
<a href="exo2_formulaire.php">Exercice 2 : DONS</a>
</div>

<div class="bas">

<form action="exo1_page2.php" method="get">

    Veuillez choisir un professeur :
    <select name="professeur">
        <?php foreach ($professeurs as $prof) { ?>
            <option value="<?php echo $prof; ?>"><?php echo $prof; ?></option>
        <?php } ?>
    </select>
    <br><br>

    Quel cours voulez vous commander :
    <select name="cours">
        <?php foreach ($cours as $unCours) { ?>
            <option value="<?php echo $unCours; ?>"><?php echo $unCours; ?></option>
        <?php } ?>
    </select>
    <br><br>

    Combien :
    <input type="text" name="nombre">
    <br><br>

    <input type="submit" value="soumettre">

</form>

</div>

</body>
</html>