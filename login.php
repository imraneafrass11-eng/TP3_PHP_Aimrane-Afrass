<?php
// Auteur : Oumaima Jabbouri
// Objectif : Authentification par Session & Cookie
// Date : 17/10/2026

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    if (!empty($login)) {
        $_SESSION['login'] = $login;
        setcookie("dernier_login", $login, time() + 86400, "/");
        header("Location: profil.php");
        exit();
    }
}

require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';

$dernier_login = $_COOKIE['dernier_login'] ?? '';
?>

<h2>Connexion</h2>
<form action="login.php" method="POST">
    <label>Login : <input type="text" name="login" value="<?= htmlspecialchars($dernier_login) ?>" required></label>
    <button type="submit">Se connecter</button>
</form>

<?php require_once 'includes/pied_inc.php'; ?>