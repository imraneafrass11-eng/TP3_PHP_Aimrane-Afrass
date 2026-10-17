# TP3 PHP - Suivi des notes

Projet réalisé dans le cadre du Travail Pratique 3 (PHP) : Application web de gestion et de suivi des notes des apprenants.

## 👤 Auteur
* **Auteur :** Oumaima Jabbouri
* **Environnement :** PHP 8.2.12 / Server Localhost (XAMPP)

## 📁 Structure du projet
* `config.php` : Configuration générale et constantes (ex: SEUIL).
* `includes/` : Composants réutilisables (`entete_inc.php`, `menu_inc.php`, `pied_inc.php`).
* `exo1_bases.php` & `exo2_flux.php` & `exo3_tableaux.php` : Exercices sur les bases, structures de contrôle et tableaux.
* `saisie.html` & `traitement.php` : Saisie des notes et écriture dans le fichier CSV.
* `liste.php` : Lecture du fichier CSV et calcul des moyennes.
* `info.html` & `info.php` : Formulaire avec méthode GET.
* `export.php` : Exportation des données CSV vers le format JSON.
* `login.php`, `profil.php` & `deconnexion.php` : Gestion des sessions et authentification.

## 🚀 Lancement du projet
Pour exécuter le serveur de développement local :
```bash
php -S localhost:8000
