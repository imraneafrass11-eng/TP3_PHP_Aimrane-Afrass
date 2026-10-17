<?php
// Auteur : Oumaima
// Objectif : Exercice 2 - Structures de contrôle et boucles
// Date : 17/10/2026

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h2>Partie 2 : Flux et Boucles</h2>";

// Exo 2.1 : Fonction mention
function mention($note) {
    if ($note >= 16) return "Très bien";
    if ($note >= 14) return "Bien";
    if ($note >= 12) return "Assez bien";
    if ($note >= SEUIL) return "Passable";
    return "Ajourné";
}

echo "<p>Note 15 : " . mention(15) . "</p>";
echo "<p>Note 8 : " . mention(8) . "</p>";

// Exo 2.2 : Switch (Mois courant)
$mois = date("m");
echo "<p>Mois : ";
switch ($mois) {
    case "01": echo "Janvier"; break;
    case "02": echo "Février"; break;
    case "03": echo "Mars"; break;
    case "04": echo "Avril"; break;
    case "05": echo "Mai"; break;
    case "06": echo "Juin"; break;
    case "07": echo "Juillet"; break;
    case "08": echo "Août"; break;
    case "09": echo "Septembre"; break;
    case "10": echo "Octobre"; break;
    case "11": echo "Novembre"; break;
    case "12": echo "Décembre"; break;
    default: echo "Inconnu";
}
echo "</p>";
// Si on oublie break, l'exécution continue (fall-through).

// Exo 2.3 : Triangle d'étoiles
echo "<h3>Triangle d'étoiles</h3><pre>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";

// Nombres de 0 à 20 par pas de 2 (10 en gras)
echo "<h3>Nombres de 0 à 20</h3><p>";
$k = 0;
while ($k <= 20) {
    if ($k == 10) {
        echo "<strong>$k</strong> ";
    } else {
        echo "$k ";
    }
    $k += 2;
}
echo "</p>";

// Nombres pairs de 0 à 10 avec continue
echo "<h3>Nombres pairs (0 à 10)</h3><p>";
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 !== 0) continue;
    echo "$i ";
}
echo "</p>";

require_once 'includes/pied_inc.php';