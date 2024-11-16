<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
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
        <header class="header-wrap">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 col-md-6">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li>
                                        <i class="bx bx-phone-call"></i>
                                        <a href="tel:+527848881891">+52 784 888 1891</a>
                                    </li>
                                    <li>
                                        <i class="bx bx-envelope"></i>
                                        <a href="mailto:contacto@visitapapantla.com">contacto@visitapapantla.com</a>
                                    </li>
                                    <li>
                                        <i class="bx bx-location-plus"></i>
                                        <p>Papantla de Olarte, Veracruz, MX.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 text-align">
                            <div class="header-top-right">
                                <ul class="social-profile list-style style1">
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
                                <div class="select-lang">
                                    <i class="ri-earth-fill"></i>
                                    <div class="navbar-option-item navbar-language dropdown language-option">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="lang-name"></span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/flag/spain.jpg" alt="flag">
                                                Esp
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/flag/us.jpg" alt="flag">
                                                Ing
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/flag/japan.jpg" alt="flag">
                                                Jap
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/flag/france.jpg" alt="flag">
                                                Fra
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/img/flag/italy.jpg" alt="flag">
                                                Ita
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-account">
                                    <i class="ri-account-box-line"></i>
                                    <?php if (isset($_SESSION['user_id'])): ?>
                                        <a href="account.php">Mi Cuenta</a>
                                    <?php else: ?>
                                        <a href="login.php">Ingresar</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img class="logo-light" src="assets/img/logo.png" alt="logo">
                            <img class="logo-dark" src="assets/img/logo-dark.png" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close d-lg-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">
                                        Inicio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">
                                        Acerca de
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="hotels.php" class="nav-link">
                                        Hoteles
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Contacto
                                    </a>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <a href="hotels.php" class="nav-link btn style1">Reserva Ahora</a>
                                </li>
                            </ul>
                            <div class="other-options md-none">
                                <div class="option-item">
                                    <button class="searchbtn d-xl-none"><i class="ri-search-line"></i></button>
                                    <div class="searchbox lg-none">
                                        <form action="#" method="post">
                                            <input type="search" placeholder="Buscar...">
                                            <a href="#"><i class="bx bx-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <a href="hotels.php" class="btn style1">Reserva Ahora</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="search-area">
                        <form action="#" method="post">
                            <input type="search" placeholder="Search...">
                            <a href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <div class="mobile-bar-wrap">
                        <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>
                        <div class="mobile-menu d-lg-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
                    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['correo']); ?></h2>
                    <a href="assets/process/logout.php">Cerrar sesión</a>
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