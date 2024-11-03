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
$nombre = $_POST['name'];
$correo = $_POST['email'];
$contraseña = $_POST['password'];

// Verificar si el correo ya existe
$check_email_query = $link->prepare("SELECT correo FROM usuarios WHERE correo = ?");
$check_email_query->bind_param("s", $correo);
$check_email_query->execute();
$check_email_query->store_result();

if ($check_email_query->num_rows > 0) {
    // Si el correo ya existe
    $message = "El correo ya está registrado. Intente con otro o inicie sesión.";
    header("Location: ../../register?message=" . urlencode($message));
    exit();
}

// Si el correo no existe, proceder con el registro
$stmt = $link->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");

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
$check_email_query->close();
$stmt->close();
$link->close();
?>
