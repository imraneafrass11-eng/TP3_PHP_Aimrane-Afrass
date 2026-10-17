<?php
// Auteur : Oumaima Jabbouri
// Objectif : Page de profil protégée par Session
// Date : 17/10/2026

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';
?>

<h2>Bienvenue, <?= htmlspecialchars($_SESSION['login']) ?> !</h2>
<p><a href="deconnexion.php">Se déconnecter</a></p>

<?php require_once 'includes/pied_inc.php'; ?>