<?php
// Conectar a la base de datos
$host_name = 'db5016594095.hosting-data.io';
$database = 'dbs13455695';
$user_name = 'dbu5410004';
$password = 'VisitaPapantla@0';

$link = new mysqli($host_name, $user_name, $password, $database);

if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
}

// Establecer la codificación de caracteres a utf8mb4
$link->set_charset("utf8mb4");
?>