<?php
// Auteur : Oumaima Jabbouri
// Objectif : Lecture du fichier CSV et affichage de la liste avec moyennes
// Date : 17/10/2026

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

function mention($note) {
    if ($note >= 16) return "Très bien";
    if ($note >= 14) return "Bien";
    if ($note >= 12) return "Assez bien";
    if ($note >= SEUIL) return "Passable";
    return "Ajourné";
}

echo "<h2>Liste des Apprenants et Notes (CSV)</h2>";

if (file_exists('data/notes.csv')) {
    $file = fopen('data/notes.csv', 'r');
    echo "<table>";
    echo "<tr><th>Nom</th><th>Note Info</th><th>Note Math</th><th>Moyenne</th><th>Mention</th></tr>";

    $total_moyennes = 0;
    $count = 0;

    while (($row = fgetcsv($file, 1000, ';')) !== false) {
        $nom = htmlspecialchars($row[0]);
        $info = (float)$row[1];
        $math = (float)$row[2];
        $moyenne = ($info + $math) / 2;
        $total_moyennes += $moyenne;
        $count++;

        echo "<tr><td>$nom</td><td>$info</td><td>$math</td><td>" . number_format($moyenne, 2) . "</td><td>" . mention($moyenne) . "</td></tr>";
    }
    fclose($file);
    echo "</table>";

    if ($count > 0) {
        echo "<p><strong>Moyenne générale de la classe : " . number_format($total_moyennes / $count, 2) . " / 20</strong></p>";
    }
} else {
    echo "<p>Aucune donnée enregistrée pour le moment.</p>";
}

require_once 'includes/pied_inc.php';