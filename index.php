<?php
$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

echo $mois[2]."<br>";
echo $mois[5]."<br>";
$mois[7] = "août";

$departement = ["59" => "Nord", "62" => "Pas-de-Calais", "02" => "Aisne", "60" => "Oise", "80" => "Somme"];

echo $departement["59"]."<br>";

//A revoir exercice 7
$departement["51"] = "Reims";

echo "<br>";

foreach ($mois as $value){
    echo $value."<br>";
}

echo "<br>";

foreach ($departement as $value){
    echo $value."<br>";
}

foreach ($departement as $key => $value){
    echo " Le déparatement $value à le numéro $key <br>";
}