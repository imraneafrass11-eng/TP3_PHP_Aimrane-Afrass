<?php
// Auteur : Oumaima Jabbouri
// Objectif : Exportation des données du fichier CSV vers data/notes.json
// Date : 17/10/2026

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$data = [];

if (file_exists('data/notes.csv')) {
    $file = fopen('data/notes.csv', 'r');
    while (($row = fgetcsv($file, 1000, ';')) !== false) {
        $moyenne = ((float)$row[1] + (float)$row[2]) / 2;
        $data[] = [
            'nom' => $row[0],
            'note_info' => (float)$row[1],
            'note_math' => (float)$row[2],
            'moyenne' => $moyenne
        ];
    }
    fclose($file);

    file_put_contents('data/notes.json', json_encode($data, JSON_PRETTY_PRINT));
    echo "<p style='color:green;'>Exportation réussie vers data/notes.json !</p>";
    echo "<pre>" . htmlspecialchars(file_get_contents('data/notes.json')) . "</pre>";
}

require_once 'includes/pied_inc.php';