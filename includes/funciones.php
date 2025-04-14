<?php

require 'app.php';

function incluirTemplates(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}

function estaAutenticado() {
    session_start();

    if (!isset($_SESSION['login'])) {
        return false;
    }

    return $_SESSION['login'];
}