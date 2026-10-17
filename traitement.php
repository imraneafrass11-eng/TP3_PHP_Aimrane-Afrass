<?php
// Auteur : Oumaima Jabbouri
// Objectif : Validation des notes et écriture dans data/notes.csv
// Date : 17/10/2026

require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $note_info = filter_var($_POST['note_info'], FILTER_VALIDATE_FLOAT);
    $note_math = filter_var($_POST['note_math'], FILTER_VALIDATE_FLOAT);

    if (!empty($nom) && $note_info !== false && $note_math !== false &&
        $note_info >= NOTE_MIN && $note_info <= NOTE_MAX &&
        $note_math >= NOTE_MIN && $note_math <= NOTE_MAX) {

        // Écriture CSV
        $file = fopen('data/notes.csv', 'a');
        fputcsv($file, [$nom, $note_info, $note_math], ';');
        fclose($file);

        echo "<p style='color:green;'>Note enregistrée avec succès pour " . htmlspecialchars($nom) . " !</p>";
        echo "<p><a href='liste.php'>Consulter la liste</a></p>";
    } else {
        echo "<p class='erreur'>Saisie invalide ! Les notes doivent être entre 0 et 20.</p>";
    }
}

require_once 'includes/pied_inc.php';