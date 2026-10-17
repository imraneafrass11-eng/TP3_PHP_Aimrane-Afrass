<?php
// Auteur : Oumaima Jabbouri
// Objectif : Traitement du formulaire GET info.html
// Date : 17/10/2026

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$nom = htmlspecialchars($_GET['nom'] ?? '');
$prenom = htmlspecialchars($_GET['prenom'] ?? '');
$sexe = $_GET['sexe'] ?? 'M';

$titre = ($sexe === 'F') ? "Madame" : "Monsieur";
echo "<h2>Bonjour $titre $prenom $nom</h2>";

require_once 'includes/pied_inc.php';