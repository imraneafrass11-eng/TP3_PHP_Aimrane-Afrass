<?php
// Auteur : OUMAIMA JABBOURI
// Objectif : Pied de page commun avec affichage de la date et calcul des jours restants
// Date : 17/10/2026

$date_fin = new DateTime('2026-12-31');
$date_aujourdhui = new DateTime();
$interval = $date_aujourdhui->diff($date_fin);
?>
    <hr>
    <footer>
        <p>&copy; <?= date('Y') ?> - <?= ETABLISSEMENT ?> | Date du jour : <?= date('d/m/Y') ?></p>
        <p>Jours restants avant la fin du semestre : <?= $interval->days ?> jours.</p>
    </footer>
</body>
</html>