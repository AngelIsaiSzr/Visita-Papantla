<?php
session_start();
require '../config/db.php';

// Obtener datos del formulario
$correo = $_POST['email'];
$contraseña = $_POST['password'];

// Preparar y ejecutar la consulta para buscar el usuario
$stmt = $link->prepare("SELECT id_usuario, contraseña FROM usuarios WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$stmt->store_result();

// Verificar si se encontró el usuario
if ($stmt->num_rows > 0) {
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    if (password_verify($contraseña, $hashed_password)) {
        // Obtener el nombre del usuario
        $stmt_nombre = $link->prepare("SELECT nombre FROM usuarios WHERE id_usuario = ?");
        $stmt_nombre->bind_param("i", $user_id);
        $stmt_nombre->execute();
        $stmt_nombre->bind_result($nombre);
        $stmt_nombre->fetch();

        // Almacenar los datos del usuario en la sesión
        $_SESSION['user_id'] = $user_id;
        $_SESSION['correo'] = $correo;
        $_SESSION['nombre'] = $nombre;

        // Si el checkbox "Recordar contraseña" está marcado, guardar los datos en una cookie
        if (isset($_POST['remember'])) {
            setcookie('email', $correo, time() + (30 * 24 * 60 * 60), "/");
            setcookie('password', $contraseña, time() + (30 * 24 * 60 * 60), "/");  
        } else {
            setcookie('email', '', time() - 3600, "/");
            setcookie('password', '', time() - 3600, "/");
        }

        // Redirigir al inicio con un mensaje de éxito
        $message = "Inicio de sesión exitoso. ¡Bienvenido!";
        header("Location: ../../index.php?message=" . urlencode($message) . "&type=login");
        exit();
    } else {
        // Contraseña incorrecta
        $message = "Contraseña incorrecta.";
        header("Location: ../../login.php?message=" . urlencode($message) . "&type=login");
        exit();
    }
} else {
    // No se encontró un usuario con este correo
    $message = "No se encontró una cuenta con este correo.";
    header("Location: ../../login.php?message=" . urlencode($message) . "&type=login");
    exit();
}
?>
