<?php
// Auteur : Oumaima jabbouri
// Objectif : Exercice 1 - Bases PHP
// Date : 17/10/2026

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

echo "<h2>Partie 1 : Bases</h2>";

// Exo 1.1 : Variables valides et invalides
// Valides : $x, $_x, $Prix_HT, $état
// Invalides : $2x (chiffre), $x-y (tiret), $prix ht (espace)
$x = 10;
$_x = 20;
$Prix_HT = 100;
$état = "OK";

$a = "Minuscule";
$A = "Majuscule"; // $a et $A sont distinctes

// Exo 1.2 : Constantes
echo "<p>Établissement : " . ETABLISSEMENT . "</p>";
echo "<p>Seuil : " . SEUIL . "</p>";

// Exo 1.3 : Calcul du prix TTC
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "<p>Le prix TTC est de $prix_ttc €.</p>";

// Exo 1.4 : Conversion de type (Cast)
$test = 42;
$test_str = (string)$test;

// Exo 1.5 : Chaînes de caractères
echo '<p>Ahmed a dit : "J\'ai réussi"</p>';
$chaine = "*Bonjour*";
echo "<p>Trim : " . trim($chaine, "*") . "</p>";

require_once 'includes/pied_inc.php';