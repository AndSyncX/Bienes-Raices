<?php

require 'app.php';

function incluirTemplates(string $nombre, bool $inicio = false) {
    include TEMPLATES_URL . "/{$nombre}.php";
}