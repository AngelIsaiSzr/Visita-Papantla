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
                                <h2>Detalles del Hotel</h2>
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">
                                                <i class="bx bx-home-circle"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Detalles del Hotel</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadscrumb Section End -->

            <!-- Start Hotel Details -->
            <section class="hotel-details-area ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0 order-lg-2">
                            <div class="sticky-top">
                                <div data-aos="fade-up" data-aos-duration="1200" class="mb-4">
                                    <h3 class="title">Hotel Tajín</h3>
                                    <span class="price d-block">$600.00</span>
                                    <span class="d-block mb-4">
                                        <i class="bx bx-location-plus pe-2"></i>José de Jesús Nuñez, El Naranjo,
                                        Papantla, Ver.
                                    </span>
                                    <ul class="hotel-detail-meta list-unstyled ">
                                        <li>
                                            <a href="#" title="Rating">
                                                <i class="bx bx-star text-warning pe-2"></i>4/5
                                            </a>
                                        </li>
                                        <li class="share-box">
                                            <a href="#" title="Share">
                                                <i class="bx bx-share-alt"></i>
                                            </a>
                                            <ul class="list-unstyled share-box-social">
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
                                                <li>
                                                    <a href="#">
                                                        <i class="ri-pinterest-fill"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" title="Wishlist">
                                                <i class="bx bx-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Compare">
                                                <i class="bx bx-transfer"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Print">
                                                <i class="bx bx-printer"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="title mb-4">Contactar con el Hotel</h3>
                                <div data-aos="fade-up" data-aos-duration="1400" class="agent-contact-inner p-4">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="agent-contact-avatar me-3">
                                            <img class="img-fluid rounded-circle avatar avatar-lg"
                                                src="assets/img/team/team-1.jpg" alt="">
                                        </div>
                                        <div class="agent-contact-name">
                                            <a href="team-details.html">
                                                <h6 class="text-white">Angel Salazar</h6>
                                            </a>
                                            <span class="text-white">Gerente </span>
                                        </div>
                                    </div>
                                    <div class="contact-info d-flex mb-4 align-items-center">
                                        <h6 class="text-primary border p-2 mb-0">
                                            <a href="#"><i class="fas fa-phone-volume text-white pe-2"></i>+52 784 888
                                                1891</a>
                                        </h6>
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <input type="email" class="form-control"
                                                placeholder="Tu correo electrónico">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Tu número de teléfono">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="3"
                                                placeholder="Escribir mensaje"></textarea>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label text-white" for="flexCheckDefault">
                                                Acepto el tratamiento de mis datos personales
                                            </label>
                                        </div>
                                        <a class="btn btn-primary d-grid style5" href="#">Enviar Mensaje</a>
                                    </form>
                                </div>
                                <a class="btn style5 mt-5" href="booking-form.html">Reservar ahora</a>
                            </div>
                        </div>
                        <div class="col-lg-8 order-lg-1">
                            <div data-aos="fade-up" data-aos-duration="1200"
                                class="hotel-detail-gallery overflow-hidden">
                                <ul class="nav nav-tabs nav-tabs-02 mb-4" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link shadow active" id="photo-tab" data-bs-toggle="pill"
                                            href="#photo" role="tab" aria-controls="photo"
                                            aria-selected="true">Imágenes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link shadow" id="map-tab" data-bs-toggle="pill" href="#map"
                                            role="tab" aria-controls="map" aria-selected="false">Mapa</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="photo" role="tabpanel"
                                        aria-labelledby="photo-tab">
                                        <div class="slider-slick">
                                            <div class="slider slider-for detail-big-car-gallery">
                                                <img class="img-fluid"
                                                    src="https://raw.githubusercontent.com/AngelIsaiSzr/Resources/refs/heads/main/images/hotel/1.jpg"
                                                    alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel2.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel3.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel4.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel5.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel6.jpg" alt="">
                                            </div>
                                            <div class="slider slider-nav">
                                                <img class="img-fluid"
                                                    src="https://raw.githubusercontent.com/AngelIsaiSzr/Resources/refs/heads/main/images/hotel/1.jpg"
                                                    alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel2.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel3.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel4.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel5.jpg" alt="">
                                                <img class="img-fluid" src="assets/img/hotel/img-hotel6.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.4707566025695!2d-97.32370362567788!3d20.44584930754585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85da442ecebc479b%3A0xc5400aca95c390d4!2sHotel%20Tajin!5e0!3m2!1ses-419!2smx!4v1733201284969!5m2!1ses-419!2smx"
                                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1400" class="hotel-info mt-5">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <h5>Detalles del Hotel</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <ul class="hotel-list list-unstyled">
                                                    <li><b>ID del hotel:</b> 1</li>
                                                    <li><b>Costo:</b> $600.00</li>
                                                    <li><b>Habitaciones:</b> 73</li>
                                                    <li><b>Horario de Registro de entrada:</b> 3:00 pm</li>
                                                    <li><b>Horario de Registro de salida:</b> 12:00 pm</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="hotel-list list-unstyled">
                                                    <li><b>Aparcamiento:</b> 1</li>
                                                    <li><b>Idiomas:</b> Español, Inglés</li>
                                                    <li><b>Año de construcción:</b> 1967</li>
                                                    <li><b>Tipo de hotel:</b> Estándar</li>
                                                    <li><b>Teléfono:</b> +52 784 842 0121</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h6 class="text-primary">Detalles Adicionales</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li><b>Accesibilidad:</b> Acceso para silla de ruedas</li>
                                                    <li><b>Mascotas:</b> No permitidas</li>
                                                    <li><b>Año de última remodelación:</b> 2015</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li><b>Servicios:</b> Piscina al aire libre</li>
                                                    <li><b>Habitaciones Adicionales:</b> Salón de banquetes</li>
                                                    <li><b>Equipamiento:</b> Aire acondicionado </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                            <div data-aos="fade-up" data-aos-duration="1600" class="hotel-description">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <h5>Descripción</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <p style="text-align:justify;">Este hotel tranquilo se encuentra en un edificio
                                            que data del siglo XVIII, a 2 minutos a pie del parque Israel C. Tellez, a
                                            menos de 1 km de la autopista 180 y a 9 km del museo de sitio El Tajín. Las
                                            habitaciones amuebladas de manera sencilla cuentan con Wi-Fi y TV (algunas
                                            son de pantalla plana). Las suites tienen capacidad para 3 o 4 huéspedes, o
                                            incluyen área de visitas. Hay 2 restaurantes informales. Entre otros
                                            servicios, se incluyen patio de piedra, piscina al aire libre y terraza con
                                            vista a la ciudad y a los parques cercanos.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                            <div data-aos="fade-up" data-aos-duration="2000" class="hotel-features">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <h5>Características</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="hotel-list-style-2 list-unstyled mb-0">
                                                    <li>TV de cable</li>
                                                    <li>Aire acondicionado</li>
                                                    <li>Asador</li>
                                                    <li>Gimnasio</li>
                                                    <li>Piscina</li>
                                                    <li>Lavandería</li>
                                                    <li>Microondas</li>
                                                    <li>Habitación separada</li>
                                                    <li>Ropa de cama premium</li>
                                                    <li>Baño privado</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="hotel-list-style-2 list-unstyled mb-0">
                                                    <li>Jardín</li>
                                                    <li>Refrigerador</li>
                                                    <li>Servicio de limpieza diario</li>
                                                    <li>Lavadora</li>
                                                    <li>Secadora</li>
                                                    <li>WiFi</li>
                                                    <li>Desayuno disponible</li>
                                                    <li>Canales por cable</li>
                                                    <li>Plancha y tabla de planchar</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                            <div data-aos="fade-up" data-aos-duration="2200" class="hotel-address">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <h5>Dirección</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li><b>Calle:</b> José de J. Núñez 104</li>
                                                    <li><b>Colonia:</b> Centro, Barrio del Naranjo</li>
                                                    <li><b>Código Postal:</b> 93400</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li><b>Ciudad:</b> Papantla de Olarte</li>
                                                    <li><b>Estado:</b> Veracruz</li>
                                                    <li><b>País:</b> México</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                            <div data-aos="fade-up" data-aos-duration="2400" class="hotel-video">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <h5>Video del Hotel</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="100%" height="315"
                                                src="https://www.youtube.com/embed/UJEUwEJ6gH4" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
                            <div data-aos="fade-up" data-aos-duration="2600" class="hotel-nearby">
                                <div class="row">
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <h5>Lugares Cercanos</h5>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-2 d-block text-info">
                                                <i class="bx bxs-school me-2"></i><b>Turísticos</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>Parque Israel C. Tellez</b> </span>
                                                    </li>
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>Mercado de Artesanías</b> </span>
                                                    </li>
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>Mural a la cultura Totonaca</b> </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-2 d-block text-success">
                                                <i class="bx bx-health me-2"></i><b>Restaurantes</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>Restaurante Totonaco</b> </span>
                                                    </li>
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>The Italian Coffe Company</b> </span>
                                                    </li>
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>La Parroquia de Papantla</b> </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info">
                                            <span class="nearby-title mb-2 d-block text-danger">
                                                <i class="bx bx-bus me-2"></i><b>Transporte</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="hotel-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <span class="me-1"><b>Radio Taxi Papanes A. C.</b> </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Hotel Details -->

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