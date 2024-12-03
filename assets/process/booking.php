<?php
session_start();
require '../config/db.php';

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    $message = "Por favor, inicia sesión antes de hacer una reservación.";
    header("Location: ../../login.php?message=" . urlencode($message));
    exit();
}

$id_usuario = $_SESSION['user_id'];

// Verificar si se recibió una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $hotel = $_POST['hotel'];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];
    $adultos = $_POST['adultos'];
    $niños = $_POST['niños'];
    $habitacion = $_POST['habitacion'];
    $noches = $_POST['noches'];
    $num_personas = $adultos + $niños;

    // Insertar la reservación principal
    $query_reservacion = "
        INSERT INTO reservaciones (id_usuario, id_hotel, fecha_reservacion, fecha_llegada, fecha_salida, num_personas)
        VALUES ('$id_usuario', '$hotel', NOW(), '$check_in', '$check_out', '$num_personas')
    ";

    if (mysqli_query($link, $query_reservacion)) {
        // Obtener el ID de la reservación recién creada
        $id_reservacion = mysqli_insert_id($link);

        // Insertar los detalles de la reservación
        $query_detalles = "
            INSERT INTO detalles_reservaciones (id_reservacion, id_usuario, nombre, apellidos, correo, telefono, hotel, fecha_llegada, fecha_salida, adultos, niños, habitacion, noches)
            VALUES ('$id_reservacion', '$id_usuario', '$nombre', '$apellidos', '$correo', '$telefono', '$hotel', '$check_in', '$check_out', '$adultos', '$niños', '$habitacion', '$noches')
        ";

        if (mysqli_query($link, $query_detalles)) {
            $message = "¡Reserva realizada con éxito!";
            header("Location: ../../booking-form.php?message=" . urlencode($message));
            exit();
        } else {
            $message = "Error al guardar los detalles de la reservación.";
            header("Location: ../../booking-form.php?message=" . urlencode($message));
            exit();
        }
    } else {
        $message = "Error al registrar la reservación.";
        header("Location: ../../booking-form.php?message=" . urlencode($message));
        exit();
    }
} else {
    die("Solicitud inválida.");
}
