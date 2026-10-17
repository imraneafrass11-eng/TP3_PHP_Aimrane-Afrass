<?php
// Auteur : Oumaima Jabbouri
// Objectif : Destruction de la session et redirection
// Date : 17/10/2026
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();