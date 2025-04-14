<?php

// Importar la conexión:
require 'includes/config/database.php';
$db = conectarDB();

// Crear un email y password
$email = "correo1@correo.com";
$password = "12345678";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

var_dump($passwordHash);

// Query para crear el usuario:
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash')";

//echo $query;

//exit;

// Agregarlo a la base de datos:
mysqli_query($db, $query);
