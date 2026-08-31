<?php
require_once("jpgraph-4.4.3/src/jpgraph.php");
require_once("jpgraph-4.4.3/src/jpgraph_pie.php");

$contenu = file_get_contents("resultats.txt");
$lignes = explode("\n", $contenu);

$noms = array();
$dons = array();

foreach ($lignes as $ligne) {
    $champs = explode("|", $ligne);
    if (count($champs) == 4 && trim($champs[0]) != "" && trim($champs[3]) != "") {
        $noms[] = mb_convert_encoding(trim($champs[0]), "ISO-8859-1", "UTF-8");
        $dons[] = trim($champs[3]);
    }
}

$graph = new PieGraph(500, 350);
$graph->SetShadow();

$graph->title->Set(mb_convert_encoding("Repartition des dons", "ISO-8859-1", "UTF-8"));
$graph->title->SetFont(FF_FONT2, FS_BOLD);
$graph->title->SetColor("#333333");

$pieplot = new PiePlot($dons);
$pieplot->SetLegends($noms);
$pieplot->SetSliceColors(array("#e91e63", "#3f51b5", "#00bcd4", "#4caf50", "#ff9800", "#9c27b0"));


$pieplot->SetLabelType(PIE_VALUE_ABS);

$pieplot->value->Show();
$pieplot->value->SetFormat("%d EUR");
$pieplot->value->SetFont(FF_FONT2, FS_BOLD);
$pieplot->value->SetColor("black");

$graph->Add($pieplot);
$graph->Stroke();