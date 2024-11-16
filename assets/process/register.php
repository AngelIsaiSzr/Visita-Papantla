<?php
session_start();
include 'assets/config/db.php';

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
    header("Location: ../../register.php?message=" . urlencode($message));
    exit();
}

// Si el correo no existe, proceder con el registro
$stmt = $link->prepare("INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)");

// Hash de la contraseña
$hashed_password = password_hash($contraseña, PASSWORD_BCRYPT);

// Vincular los parámetros y ejecutar la consulta
$stmt->bind_param("sss", $nombre, $correo, $hashed_password);

if ($stmt->execute()) {
    // Obtener el ID del usuario recién registrado
    $user_id = $stmt->insert_id;

    // Almacenar el estado de inicio de sesión en la sesión
    $_SESSION['user_id'] = $user_id;
    $_SESSION['correo'] = $correo;
    $_SESSION['nombre'] = $nombre;

    // Redirigir a la página principal o de cuenta
    $message = "Registro exitoso. ¡Bienvenido!";
    header("Location: ../../index.php?message=" . urlencode($message) . "&type=register");
    exit();
} else {
    $message = "Error: " . $stmt->error;
    header("Location: ../../register.php?message=" . urlencode($message) . "&type=register");
    exit();
}
?>
