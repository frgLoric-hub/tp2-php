<?php
require_once("jpgraph-4.4.3/src/jpgraph.php");
require_once("jpgraph-4.4.3/src/jpgraph_line.php");
require_once("jpgraph-4.4.3/src/jpgraph_scatter.php");

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

$couleurs = array("#3498db", "#f1c40f", "#e74c95", "#2ecc71", "#9b59b6", "#e67e22");

$maxDon = max($dons);
$echelleMax = $maxDon + ($maxDon * 0.2);
$nbPoints = count($dons);

$graph = new Graph(500, 350);
$graph->SetScale("intlin", 0, $echelleMax, 0, $nbPoints - 1);
$graph->SetMargin(60, 30, 50, 100);
$graph->SetFrame(false);
$graph->SetColor("white");

$graph->title->Set(mb_convert_encoding("Montant des dons", "ISO-8859-1", "UTF-8"));
$graph->title->SetFont(FF_FONT2, FS_BOLD);
$graph->title->SetColor("#555555");

$graph->xaxis->SetTickLabels($noms);
$graph->xaxis->SetTextTickInterval(1);
$graph->xaxis->SetFont(FF_FONT1);
$graph->yaxis->SetFont(FF_FONT1);
$graph->xgrid->Show(false);
$graph->ygrid->SetFill(true, "#f0f0f0", "#ffffff");

$ligne = new LinePlot($dons);
$ligne->SetColor("#cccccc");
$ligne->SetWeight(2);
$graph->Add($ligne);

for ($i = 0; $i < $nbPoints; $i++) {
    $couleur = $couleurs[$i % count($couleurs)];

    $point = new ScatterPlot(array($dons[$i]), array($i));
    $point->mark->SetType(MARK_FILLEDCIRCLE);
    $point->mark->SetColor($couleur);
    $point->mark->SetFillColor($couleur);
    $point->mark->SetWidth(7);
    $point->SetLegend($noms[$i]);

    $graph->Add($point);
}

$graph->legend->SetPos(0.5, 0.98, "center", "bottom");
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->SetFrameWeight(1);

$graph->Stroke();
?>