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

// Obtener datos del formulario
$correo = $_POST['email'];
$contraseña = $_POST['password'];

// Preparar y ejecutar la consulta para buscar el usuario
$stmt = $link->prepare("SELECT contraseña FROM usuarios WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$stmt->store_result();

// Verificar si se encontró el usuario
if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($contraseña, $hashed_password)) {
        $message = "Inicio de sesión exitoso. ¡Bienvenido!";
        header("Location: ../../login.html?message=" . urlencode($message));
        exit();
    } else {
        $message = "Contraseña incorrecta.";
        header("Location: ../../login.html?message=" . urlencode($message));
        exit();
    }
} else {
    $message = "No se encontró una cuenta con este correo.";
    header("Location: ../../login.html?message=" . urlencode($message));
    exit();
}

// Cerrar la conexión
$stmt->close();
$link->close();
?>