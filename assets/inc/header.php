<?php
// Iniciar la sesión (si aún no está iniciada)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Obtener el nombre del archivo actual
$current_page = basename($_SERVER['PHP_SELF']);
?>

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
                            <a href="index.php"
                                class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php"
                                class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>">
                                Acerca de
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="hotels.php"
                                class="nav-link <?php echo $current_page == 'hotels.php' ? 'active' : ''; ?>">
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
                            <a href="booking-form.php" class="nav-link btn style1">Reserva Ahora</a>
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
                            <a href="booking-form.php" class="btn style1">Reserva Ahora</a>
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