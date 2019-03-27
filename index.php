<?php


session_start();

if (empty($_SESSION['username'])) {
    header('Location: login.php');
}


require 'templates/header.tpl.php';
require 'templates/home.tpl.php';
require 'templates/footer.tpl.php';
