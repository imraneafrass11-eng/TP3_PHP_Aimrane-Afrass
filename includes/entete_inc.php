<?php
// Auteur : Oumaima Jabbouri
// Objectif : En-tête HTML commun à toutes les pages
// Date : 17/10/2026

require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= ETABLISSEMENT ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { background: #f4f4f4; padding: 10px; margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; font-weight: bold; }
        nav a:hover { color: #0066cc; }
        table { border-collapse: collapse; width: 100%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #eee; }
        .erreur { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1><?= ETABLISSEMENT ?></h1>
    <hr>