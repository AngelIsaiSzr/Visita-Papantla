<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$nombre = implode(' ', array_slice(explode(' ', $_SESSION['nombre']), 0, 2));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Visita Papantla</title>

    <meta name="title" content="Visita Papantla">
    <meta name="description"
        content="¡Bienvenido a Visita Papantla! - Una plataforma intuitiva dedicada a facilitar las reservaciones de hoteles en Papantla, Veracruz">
    <meta name="keywords"
        content="Visita Papantla, Papantla, Hotel, Hoteles, Reservaciones, Reservar, Visitar, Conocer">
    <meta name="robots" content="index,follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="visitapapantla.com">
    <meta property="og:title" content="Visita Papantla">
    <meta property="og:description" content="¡Bienvenido a Visita Papantla!">
    <meta property="og:image"
        content="https://raw.githubusercontent.com/AngelIsaiSzr/Resources/refs/heads/main/images/Visita%20Papantla.png">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="assets/img/icon.png">

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl-theme-default-min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/dark-theme.css">
</head>

<body>
    <!-- START PRELOADER AREA -->
    <div class="preloader-style" id="loader-style">
        <div class="preloader-wrap">
            <div class="preloader-container">
                <div class="petal"></div>
                <div class="petal"></div>
                <div class="petal"></div>
                <div class="petal"></div>
                <div class="petal"></div>
                <div class="petal"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
    <!-- END PRELOADER AREA -->

    <!-- Theme Switcher Start -->
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->

    <!-- Page Wrapper Start -->
    <div class="page-wrapper">

        <!-- Header Section Start -->
        <?php include_once 'assets/inc/header.php'; ?>
        <!-- Header Section End -->

        <!-- Main Wrapper Start -->
        <div class="main page-wrapper">

            <!-- Breadscrumb Section Start -->
            <section class="breadscrumb-section ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadscrumb-contain">
                                <h2>Mi Cuenta</h2>
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="bx bx-home-circle"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Mi Cuenta</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadscrumb Section End -->

            <!-- My Account Section Start -->
            <div class="my-account-area ptb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10 col-sm-12 col-12">
                            <div class="custom-card p-4 shadow">
                                <h2 class="section-title title">Bienvenido,
                                    <?php echo htmlspecialchars($nombre); ?>
                                </h2>
                                <div class="user-info text-center mb-4">
                                    <p class="user-email text-muted">
                                        <?php echo htmlspecialchars($_SESSION['correo']); ?>
                                    </p>
                                </div>
                                <div class="account-options">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Configurar perfil</span>
                                            <a href="profile.php" class="btn btn-sm btn-primary">Ir</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Historial de reservas</span>
                                            <a href="reservations.php" class="btn btn-sm btn-secondary">Ver</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span>Seguridad de cuenta</span>
                                            <a href="security.php" class="btn btn-sm btn-warning">Gestionar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="logout mt-4 text-center">
                                    <a href="assets/process/logout.php" class="btn btn-danger">Cerrar sesión</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End -->

        </div>
        <!-- Main Wrapper End -->

        <!-- Footer Section Start -->
        <footer class="footer-wrap">
            <div class="footer-top">
                <div class="container">
                    <div class="row ptb-60">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 pe-xl-5">
                            <div class="footer-widget">
                                <a href="index.php" class="footer-logo">
                                    <img src="assets/img/logo-dark.png" alt="Image">
                                </a>
                                <p class="comp-desc">
                                    En Visita Papantla nuestra misión es hacer que descubrir y reservar hoteles sea un
                                    proceso sencillo y rápido para que cada visitante disfrute al máximo.
                                </p>
                                <div class="newsletter-form contact-form">
                                    <form class="subscribe__form" action="assets/php/mail.php" method="post">

                                        <div class="col-12">
                                            <input type="email" placeholder="Correo Electrónico" required>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit">Suscribirse ahora</button>
                                        </div>

                                        <!-- Start Form Message -->
                                        <div class="col-12">
                                            <div class="msg_submit text-center alert alert-success successform subscribe__msg"
                                                role="alert">
                                                Su suscripción fue activada exitosamente!
                                            </div>
                                        </div>
                                        <!-- End Form Message -->

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ps-xl-5 ps-lg-4 ps-md-5">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Nuestros Servicios</h3>
                                <ul class="footer-menu list-style">
                                    <li>
                                        <a>
                                            Reservaciones
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Hoteles
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Restaurantes
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Historia de Papantla
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Galería de Papantla
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            Blog de Papantla
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Nuestro Equipo</h3>
                                <ul class="footer-menu list-style">
                                    <li>
                                        <a href="team-details.html">
                                            Angel Salazar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">
                                            Valeria Rivera
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">
                                            Denisse Nava
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">
                                            Jamin García
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">
                                            Emir Jiménez
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team-details.html">
                                            Jair Percastre
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ps-md-5">
                            <div class="footer-widget">
                                <h3 class="footer-widget-title">Información de Contacto</h3>
                                <ul class="contact-info list-style">
                                    <li>
                                        <i class="bx bx-location-plus"></i>
                                        <h6>Ubicación</h6>
                                        <p>Papantla de Olarte, Veracruz, MX.</p>
                                    </li>
                                    <li>
                                        <i class="bx bx-envelope"></i>
                                        <h6>Correo</h6>
                                        <a href="mailto:contacto@visitapapantla.com">contacto@visitapapantla.com</a>
                                    </li>
                                    <li>
                                        <i class="bx bx-phone-call"></i>
                                        <h6>Télefono</h6>
                                        <a href="tel:+527848881891">+52 784 888 1891</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-6 col-sm-7">
                            <p class="copyright-text">Copyright © 2024 - Visita Papantla - Todos los Derechos
                                Reservados.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-5">
                            <ul class="social-profile style1 list-style">
                                <li>
                                    <a href="#">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Mensaje</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalMessage">
                    <!-- Aquí se mostrará el mensaje -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Capturar el mensaje y el tipo de la URL y mostrar el modal
        document.addEventListener("DOMContentLoaded", function () {
            const params = new URLSearchParams(window.location.search);
            const message = params.get("message");
            const type = params.get("type");

            if (message) {
                document.getElementById("modalMessage").innerText = decodeURIComponent(message);

                // Cambiar el título del modal según el tipo
                const title = type === "login" ? "Mensaje de Inicio de Sesión" : "Mensaje de Registro";
                document.getElementById("messageModalLabel").innerText = title;

                // Mostrar el modal
                var messageModal = new bootstrap.Modal(document.getElementById("messageModal"));
                messageModal.show();
            }
        });
    </script>

    <!-- Back-to-top Button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top Button End -->

    <!-- Link of JS Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/owl-thumb.min.js"></script>
    <script src="assets/js/odometer.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>