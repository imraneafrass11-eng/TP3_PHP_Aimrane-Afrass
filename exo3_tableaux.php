<?php
// Auteur : Oumaima Jabbouri
// Objectif : Exercices Partie 3 (Tableaux et fonctions de tri)
// Date : 17/10/2026

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

function mention($note) {
    if ($note >= 16) return "Très bien";
    if ($note >= 14) return "Bien";
    if ($note >= 12) return "Assez bien";
    if ($note >= SEUIL) return "Passable";
    return "Ajourné";
}

echo "<h2>Partie 3 : Tableaux et Statistiques</h2>";

// Exercice 3.2 : Affichage HTML dans un tableau
echo "<h3>1. Tableau des notes</h3>";
echo "<table>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach ($notes as $nom => $note) {
    $style = ($note < SEUIL) ? "style='color:red; font-weight:bold;'" : "";
    echo "<tr $style><td>$nom</td><td>$note</td><td>" . mention($note) . "</td></tr>";
}
echo "</table>";

// Exercice 3.3 : Statistiques (Somme, Moyenne, Max, Min)
$somme = array_sum($notes);
$total_apprenants = count($notes);
$moyenne_classe = $somme / $total_apprenants;
$meilleure_note = max($notes);
$plus_faible_note = min($notes);

echo "<h3>2. Statistiques de la classe</h3>";
echo "<p>Moyenne générale : " . number_format($moyenne_classe, 2) . " / 20</p>";
echo "<p>Meilleure note : $meilleure_note</p>";
echo "<p>Plus faible note : $plus_faible_note</p>";

// Exercice 3.4 : Tri (ksort - Tri par nom croissant)
echo "<h3>3. Tri par noms croissants (ksort)</h3>";
ksort($notes);
echo "<ul>";
foreach ($notes as $nom => $note) {
    echo "<li>$nom : $note</li>";
}
echo "</ul>";

/*
Question 3.4 :
Sur un tableau indexé (comme $modules), on utilise la fonction de tri simple sort().
*/

require_once 'includes/pied_inc.php';