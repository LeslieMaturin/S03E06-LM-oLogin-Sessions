<?php

// Pour détruire la session, il faut d'abord l'initialiser
session_start();

// Je peux vider $_SESSION avec la fonction session_unset()
session_unset();

header('Location: login.php');