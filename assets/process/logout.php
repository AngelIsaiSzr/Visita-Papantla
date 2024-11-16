<?php
session_start();
session_unset();
session_destroy();

$message = "Cierre de sesión exitoso. ¡Hasta pronto!";
header("Location: ../../index.php?message=" . urlencode($message)  . "&type=logout");
exit();
?>
