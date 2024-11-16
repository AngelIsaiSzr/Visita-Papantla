<?php
session_start();
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
    <meta name="keywords" content="Visita Papantla, Papantla, Hotel, Hoteles, Reservaciones, Reservar, Visitar, Conocer">
    <meta name="robots" content="index,follow">

    <meta property="og:type" content="website">
    <meta property="og:url" content="visitapapantla.com">
    <meta property="og:title" content="Visita Papantla">
    <meta property="og:description" content="¡Bienvenido a Visita Papantla!">
    <meta property="og:image" content="https://raw.githubusercontent.com/AngelIsaiSzr/Resources/refs/heads/main/images/Visita%20Papantla.png">

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
        <?php include 'assets/inc/header.php'; ?>
        <!-- Header Section End -->

        <!-- Main Wrapper Start -->
        <div class="main page-wrapper">

            <!-- Breadscrumb Section Start -->
            <section class="breadscrumb-section ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadscrumb-contain">
                                <h2>Acerca de</h2>
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="bx bx-home-circle"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Acerca de</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadscrumb Section End -->

            <!-- START ABOUT AREA -->
            <section class="about-area ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-content-two mb-0">
                                <span class="top-title">Acerca de</span>
                                <h2>Reserva Fácil, Reserva Inteligente.</h2>
                                <p><b>Visita Papantla</b> es una plataforma que facilita la planificación de un viaje inolvidable en Papantla, Veracruz. La app ayuda a crear una experiencia auténtica, accesible y ajustada a las necesidades de cada visitante. Conecta a los turistas con los mejores hoteles locales, garantizando un viaje cómodo y enriquecedor en esta región llena de cultura y magia.</p>

                                <ul>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Reservas rápidas y seguras
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Variedad de alojamientos y actividades
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Itinerarios personalizados al instante
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Acceso a promociones locales exclusivas
                                    </li>
                                </ul>

                                <a href="contact.html" class="btn style5">
                                    Contáctanos
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-img-two">
                                <div class="video-wrap">
                                    <a href="https://www.youtube.com/watch?v=QWLGK5rRq9Q"
                                        class="popup-youtube video-btn">
                                        <i class="bx bx-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END ABOUT AREA -->

            <!-- START COUNTER AREA CSS -->
            <section class="counter-area bg-color ptb-70">
                <div class="container">
                    <div class="row">
                        <div class="counter-col col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <i class="bx bx-gift"></i>

                                <h2>
                                    <span class="odometer" data-count="16">00</span>
                                    <span class="target">+</span>
                                </h2>

                                <p>Promociones Únicas</p>
                            </div>
                        </div>

                        <div class="counter-col col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <i class="bx bx-check-circle"></i>

                                <h2>
                                    <span class="odometer" data-count="290">00</span>
                                    <span class="target">+</span>
                                </h2>

                                <p>Reservas Realizadas</p>
                            </div>
                        </div>

                        <div class="counter-col col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <i class="bx bx-trophy"></i>

                                <h2>
                                    <span class="odometer" data-count="350">00</span>
                                    <span class="traget">+</span>
                                </h2>

                                <p>Clientes Satisfechos</p>
                            </div>
                        </div>

                        <div class="counter-col col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <i class="bx bx-home-circle"></i>

                                <h2>
                                    <span class="odometer" data-count="54">00</span>
                                    <span class="traget">+</span>
                                </h2>

                                <p>Hoteles Disponibles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COUNTER AREA CSS -->

            <!-- Features Section Start -->
            <div class="features-area pb-60">
                <div class="container">
                    <div class="row align-items-center ptb-60">
                        <div class="column col-lg-7">
                            <div class="feature-content" data-aos="fade-up" data-aos-duration="1200">
                                <span class="title">Misión</span>
                                <h4 class="subtitle">Facilitar una excelente experiencia de viaje</h4>
                                <p>Ofrecer una plataforma de fácil acceso que conecte a los viajeros con los mejores servicios de hospedaje, 
                                    entretenimiento y gastronomía en Papantla de Olarte, garantizando experiencias de calidad y momentos inolvidables para cada visitante. 
                                    Nos comprometemos a fomentar el turismo responsable y a apoyar a las comunidades locales 
                                    mediante la colaboración con negocios que comparten nuestros estándares de excelencia.</p>
                            </div>
                        </div>
                        <div class="column col-lg-5">
                            <div class="feature-thumbnail" data-aos="fade-up" data-aos-duration="1600">
                                <img src="assets/img/about/about-1.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center ptb-60">
                        <div class="column col-lg-7">
                            <div class="feature-content" data-aos="fade-up" data-aos-duration="1600">
                                <span class="title">Visión</span>
                                <h4 class="subtitle">Impulsar el turismo en Papantla</h4>
                                <p>Ser la plataforma líder en turismo en Papantla, destacada por su compromiso con el cliente y su impulso hacia experiencias auténticas y memorables.
                                     Aspiramos a posicionarnos como el puente principal entre los visitantes y los servicios turísticos locales, 
                                     promoviendo un turismo sostenible que beneficie tanto a la economía de la región como a su cultura. 
                                     Creemos en un futuro donde Visita Papantla inspire a cada viajero a explorar y valorar la esencia de Papantla.</p>
                            </div>
                        </div>
                        <div class="column col-lg-5">
                            <div class="feature-thumbnail" data-aos="fade-up" data-aos-duration="1200">
                                <img src="assets/img/about/about-2.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center ptb-60">
                        <div class="column col-lg-7">
                            <div class="feature-content" data-aos="fade-up" data-aos-duration="1200">
                                <span class="title">Valores</span>
                                <h4 class="subtitle">Basados en la excelencia y el compromiso</h4>
                                <ul>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        <b>Compromiso con el Cliente:</b> Trabajamos para que cada usuario viva una experiencia personalizada y placentera.
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        <b>Calidad y Excelencia:</b> Nos esforzamos por ofrecer los mejores servicios locales, seleccionados por su confiabilidad y autenticidad.
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        <b>Responsabilidad Social:</b> Nos involucramos activamente con la comunidad, promoviendo el desarrollo sostenible y el turismo consciente.
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        <b>Transparencia y Honestidad:</b> Ofrecemos información clara y precisa sobre todos los servicios que brindamos.
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="column col-lg-5">
                            <div class="feature-thumbnail" data-aos="fade-up" data-aos-duration="1600">
                                <img src="assets/img/about/about-3.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features Section End -->

            <!-- Start Team Area -->
            <div class="team-area pb-60">
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                        <h2>Nuestro Equipo</h2>
                        <p>Conoce a al equipo detrás Visita Papantla. Cada uno de nosotros trabaja incansablemente para
                            ofrecerte la mejor experiencia en tu visita a este hermoso pueblo mágico. ¡Estamos listos
                            para recibirte con los brazos abiertos!</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team-box" data-aos="fade-up" data-aos-duration="1200">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/team/team-1.jpg" alt="image">
                                    </a>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="#" class="github"><i class='bx bxl-github'></i></a></li>
                                        <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>Angel Salazar</h3>
                                    <span>Full Stack Developer</span>
                                    <i class='bx bx-share-alt'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team-box" data-aos="fade-up" data-aos-duration="1400">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/team/team-2.jpg" alt="image">
                                    </a>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                        <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>Valeria Rivera</h3>
                                    <span>Front-End Developer</span>
                                    <i class='bx bx-share-alt'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team-box" data-aos="fade-up" data-aos-duration="1800">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/team/team-3.jpg" alt="image">
                                    </a>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="#" class="github"><i class='bx bxl-github'></i></a></li>
                                        <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>Denisse Nava</h3>
                                    <span>Front-End Developer</span>
                                    <i class='bx bx-share-alt'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team-box" data-aos="fade-up" data-aos-duration="2000">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/team/team-4.jpg" alt="image">
                                    </a>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                        <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>Jamin García</h3>
                                    <span>Full Stack Developer</span>
                                    <i class='bx bx-share-alt'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team-box" data-aos="fade-up" data-aos-duration="1600">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/team/team-5.jpg" alt="image">
                                    </a>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                        <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>Emir Jiménez</h3>
                                    <span>Back-End Developer</span>
                                    <i class='bx bx-share-alt'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team-box" data-aos="fade-up" data-aos-duration="2200">
                                <div class="image">
                                    <a href="#">
                                        <img src="assets/img/team/team-6.jpg" alt="image">
                                    </a>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class='bx bxl-facebook'></i></a></li>
                                        <li><a href="#" class="twitter"><i class='bx bxl-twitter'></i></a></li>
                                        <li><a href="#" class="instagram"><i class='bx bxl-instagram'></i></a></li>
                                        <li><a href="#" class="linkedin"><i class='bx bxl-linkedin'></i></a></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3>Jair Percastre</h3>
                                    <span>Back-End Developer</span>
                                    <i class='bx bx-share-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Area -->

        </div>
        <!-- Main Wrapper End -->

        <!-- Footer Section Start -->
        <?php include_once 'assets/inc/footer.php'; ?>
        <!-- Footer Section End -->

    </div>
    <!-- Page Wrapper End -->

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