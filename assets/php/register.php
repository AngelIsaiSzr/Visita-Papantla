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

// Preparar e insertar datos en la tabla usuarios
$stmt = $link->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");

// Obtener datos del formulario
$nombre = $_POST['name'];
$correo = $_POST['email'];
$contraseña = $_POST['password'];

// Hash de la contraseña
$hashed_password = password_hash($contraseña, PASSWORD_BCRYPT);

// Vincular los parámetros y ejecutar la consulta
$stmt->bind_param("sss", $nombre, $correo, $hashed_password);

if ($stmt->execute()) {
    $message = "Registro exitoso. ¡Bienvenido!";
    header("Location: ../../register?message=" . urlencode($message));
    exit();
} else {
    $message = "Error: " . $stmt->error;
    header("Location: ../../register?message=" . urlencode($message));
    exit();
}

// Cerrar la conexión
$stmt->close();
$link->close();
?>