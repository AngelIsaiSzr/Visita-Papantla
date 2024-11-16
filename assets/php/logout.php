<?php
session_start();
session_unset();
session_destroy();
$message = "Cierre de sesión exitoso. ¡Hasta pronto!";
header("Location: ../../login.php?message=" . urlencode($message));
exit();
?>
