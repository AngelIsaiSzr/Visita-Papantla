<?php
// Conectar a la base de datos
$servername = "localhost:3309";
$username = "root";
$password = "moreno15";
$dbname = "visitapapantla";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer la codificación de caracteres a utf8mb4
$conn->set_charset("utf8mb4");

// Preparar e insertar datos en la tabla usuarios
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");

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
$conn->close();
?>