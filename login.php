<?php

// On exécute le code pour établir la connexion seulement si on a reçu le formulaire
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    // Il faut inclure notre liste d'utilisateurs
    require 'inc/users.php';

    // On vérifie si le username entré dans le formulaire est présent en tant que clé dans $users
    if (isset($users[$_POST['username']])) {
        // On utilise password_verify en lui précisant d'abord le mot de passe reçu dans le formulaire puis le hash stocké dans notre système
        if (password_verify($_POST['password'], $users[$_POST['username']]['pass'])) {
            // On initialise la session avec session_start(), on aurait aussi pu le placer tout en haut du fichier
            session_start();

            // On attribue des valeurs à notre session.
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['age'] = $users[$_POST['username']]['data']['age'];
            $_SESSION['role'] = $users[$_POST['username']]['data']['role'];
            $_SESSION['gimmick'] = $users[$_POST['username']]['data']['gimmick'];

            // L'utilisateur est connecté, on le redirige vers index.php
            header('Location: index.php');
        }
    }
}

require 'templates/header.tpl.php';
require 'templates/login-form.tpl.php';
require 'templates/footer.tpl.php';
