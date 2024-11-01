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

// Obtener datos del formulario
$correo = $_POST['email'];
$contraseña = $_POST['password'];

// Preparar y ejecutar la consulta para buscar el usuario
$stmt = $conn->prepare("SELECT contraseña FROM usuarios WHERE correo = ?");
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
$conn->close();
?>