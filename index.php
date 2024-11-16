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
                                    <a href="index.php" class="nav-link active">
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

            <!-- Start Slider Section -->
            <section class="banner-slider owl-carousel">
                <div class="single-banner-part bg_1">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8">
                                <div class="banner-iner">
                                    <h5>Bienvenido a Visita Papantla</h5>
                                    <h2>Descubre el Pueblo Mágico #1 del Mundo</h2>
                                    <a href="about.php" class="banner-btn">Acerca de</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-banner-part bg_2">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8">
                                <div class="banner-iner">
                                    <h5>Bienvenido a Visita Papantla</h5>
                                    <h2>Reserva en los Mejores Hoteles de la Zona</h2>
                                    <a href="hotels.php" class="banner-btn">Reservar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-banner-part bg_3">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-8">
                                <div class="banner-iner">
                                    <h5>Bienvenido a Visita Papantla</h5>
                                    <h2>Si Tienes Dudas, Contáctanos!</h2>
                                    <a href="#" class="banner-btn">Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Slider Section -->

            <!-- Start Hotel Search Section -->
            <div class="hotel-search-area" data-aos="fade-up" data-aos-duration="1200">
                <div class="container">
                    <div class="bg-white shadow">
                        <div class="row g-2 align-items-center">
                            <div class="col-md-10">
                                <div class="row g-2">
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        Hotel:
                                        <select class="form-control">
                                            <option selected>Hotel</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        Fecha de Llegada:
                                        <div class="date" id="date1">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        Fecha de Salida:
                                        <div class="date" id="date2">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        Huéspedes:
                                        <select class="form-control">
                                            <option selected>Huéspedes</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-4 col-md-4">
                                        Habitaciones:
                                        <select class="form-control">
                                            <option selected>Habitación</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <a class="btn btn-primary w-100" href="#">Buscar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hotel Search Section -->

            <!-- Start Banner Area -->
            <div class="banner-wrapper-area">
                <div class="container">
                    <div class="row">
                        <div data-aos="fade-up" data-aos-duration="1600" class="col-lg-6 col-md-12">
                            <div class="banner-wrapper-image">
                                <img src="assets/img/banner.jpg" alt="image">
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1200" class="col-lg-6 col-md-12">
                            <div class="banner-wrapper-content">
                                <h1>Reserva, Disfruta y Vive la Magia.</h1>
                                <p>Bienvenido a Visita Papantla, una plataforma enfocada en brindarte las mejores
                                    opciones para que tu experiencia de viaje sea memorable,
                                    estamos totalmente comprometidos en ofrecerte los mejores servicios ubicados en
                                    nuestra localidad.</p>
                                <p>Te proporcionamos una gama amplia de hoteles adaptándonos a tus necesidades
                                    específicas para una mayor comodidad. Por lo cual,
                                    nuestro equipo trabaja con dedicación y empeño para otorgar una excelente
                                    experiencia de viaje a todos y cada uno de nuestros clientes.
                                </p>
                                <div class="btn-box">
                                    <a href="about.php" class="btn style5">Descubre Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Area -->

            <!-- Start FAQ Area -->
            <section class="accordion-area pb-60">
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                        <h2>Preguntas Frecuentes</h2>
                        <p>Encuentra respuestas a las preguntas más comunes sobre tu Visita a Papantla. Desde
                            información sobre hoteles y actividades hasta recomendaciones locales, estamos aquí para
                            ayudarte a planificar la mejor experiencia.</p>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-12">
                            <div class="faq-accordion" data-aos="fade-up" data-aos-duration="1600">
                                <ul class="accordion">
                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            01. ¿Cómo puedo hacer una reservación en Visita Papantla?
                                        </a>

                                        <div class="accordion-content show">
                                            <p>Para realizar una reservación de hotel por medio de Visita Papantla
                                                dirígete al menú de "Hoteles" o da click en los botones "Reserva ahora"
                                                o "Reservar", a continuación explora los hoteles y elige el de tu
                                                preferencia, da click en "Detalles" del hotel que deseas, ingresa los
                                                datos solicitados
                                                y guarda el código QR que se te habrá proporcionado para comprobar tu
                                                reservación al ser mostrado en tu llegada al hotel.
                                            </p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            02. ¿Qué actividades se pueden hacer en Papantla?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Papantla ofrece una variedad de actividades para todos los gustos. Puedes
                                                visitar las impresionantes pirámides de El Tajín, un sitio arqueológico
                                                declarado Patrimonio de la Humanidad. También hay talleres de
                                                elaboración de vainilla, donde aprenderás sobre la producción de este
                                                aromático producto. Participar en danzas y eventos culturales te
                                                permitirá conocer la rica herencia totonaca. Además, hay rutas de
                                                ecoturismo locales.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            03. ¿Hay opciones de alojamiento en Papantla?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Sí, Papantla cuenta con diversas opciones de alojamiento que se adaptan a
                                                distintos presupuestos. Muchos de estos lugares ofrecen servicios que
                                                destacan la cultura local y la calidez de la hospitalidad veracruzana.
                                                Además, algunos hoteles están ubicados en áreas pintorescas que te
                                                permitirán disfrutar de vistas espectaculares. Es recomendable reservar
                                                con antelación, especialmente durante la temporada alta.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            04. ¿Cómo puedo llegar a Papantla?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Hay varias formas de llegar a Papantla, dependiendo de tu punto de
                                                partida. Si viajas en avión, el aeropuerto más cercano es el de El
                                                Tajín. Desde allí, puedes tomar un taxi o un servicio de transporte.
                                                También hay autobuses que conectan Papantla con ciudades importantes
                                                como Veracruz y Poza Rica, ofreciendo un viaje cómodo y accesible. Si
                                                decides conducir, las carreteras están en buen estado y bien
                                                señalizadas, lo que facilita el acceso.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-10">
                            <div class="faq-accordion" data-aos="fade-up" data-aos-duration="2000">
                                <ul class="accordion">
                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            05. ¿Es seguro visitar Papantla?
                                        </a>

                                        <div class="accordion-content">
                                            <p>En general, Papantla es un destino seguro para los turistas, con una
                                                comunidad local amigable y acogedora. Sin embargo, es importante seguir
                                                las precauciones habituales, como no mostrar objetos de valor y estar
                                                atento a tu entorno. Las áreas turísticas suelen estar bien vigiladas y
                                                son frecuentadas por otros visitantes. Además, la policía local está
                                                presente para garantizar la seguridad de los turistas.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            06. ¿Qué platos típicos debo probar en Papantla?
                                        </a>

                                        <div class="accordion-content">
                                            <p>La gastronomía de Papantla es rica y variada, con platos que reflejan la
                                                cultura local. Uno de los más emblemáticos es el zacahuil, un enorme
                                                tamal elaborado con masa de maíz y carne, que se cocina en hojas de
                                                plátano. Además, el café de Papantla es conocido por su calidad y sabor
                                                excepcional, ideal para los amantes de esta bebida. Otros platillos que
                                                no puedes dejar de probar son los tacos de cecina y las salsas picantes
                                                que los acompañan.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            07. ¿Existen guías turísticas disponibles?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Sí, en Papantla hay guías locales que ofrecen servicios de turismo
                                                personalizados. Estas guías son conocedoras de la historia, cultura y
                                                tradiciones de la región, lo que enriquecerá tu experiencia. Puedes
                                                optar por tours a pie o en vehículo que te llevarán a los principales
                                                puntos de interés. Además, algunos guías ofrecen talleres y actividades
                                                interactivas, como clases de cocina o danza.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            08. ¿Qué debo llevar en mi equipaje?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Al preparar tu viaje a Papantla, es importante llevar ropa ligera y
                                                cómoda, adecuada para el clima cálido y húmedo. No olvides incluir
                                                calzado cómodo para caminar, ya que muchas actividades implican explorar
                                                al aire libre. También es recomendable llevar protector solar y
                                                repelente de insectos asi como una botella de agua reutilizable. Por
                                                último, considera llevar una cámara para capturar los momentos
                                                especiales de tu viaje.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            09. ¿Hay transporte público en Papantla?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Sí, Papantla cuenta con varias opciones de transporte público que
                                                facilitan el desplazamiento en la ciudad. Los autobuses locales son una
                                                forma económica de moverte, conectando diferentes áreas y atracciones
                                                turísticas. También hay taxis disponibles que ofrecen un servicio más
                                                directo y conveniente. En general, el transporte en Papantla es
                                                accesible y te permite explorar cómodamente.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item mtb-40">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-plus'></i>
                                            10. ¿Se pueden comprar artesanías locales?
                                        </a>

                                        <div class="accordion-content">
                                            <p>Absolutamente, Papantla es famosa por sus exquisitas artesanías,
                                                especialmente los productos de vainilla y textiles elaborados por
                                                artesanos locales. Puedes encontrar mercados y tiendas donde se venden
                                                estas piezas únicas, que son ideales como recuerdos de tu visita. Apoyar
                                                a los artesanos locales no solo te permite llevarte a casa un pedazo de
                                                la cultura, sino que también contribuye a la economía de la comunidad.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End FAQ Area -->

            <!-- Testimonial Section Start -->
            <div class="testimonial-area pb-60 pt-20">
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                        <h2>Comentarios de Nuestros Clientes</h2>
                        <p>Conoce los comentarios de quienes han reservado a través de nuestra aplicación web. ¡Descubre
                            por qué elegirnos ha sido una de las mejores decisiones para tu viaje!</p>
                    </div>

                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="single-testimonial-box" data-aos="fade-up" data-aos-duration="1200">
                            <div class="content-bg">
                                <ul>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <span>(5.0)</span>
                                    </li>
                                </ul>
                                <p>¡Una experiencia increíble! La plataforma es fácil de usar y me permitió organizar
                                    todo para mi viaje de manera rápida y sencilla. Definitivamente, volveré a usar esta
                                    aplicación para mis próximos viajes de negocios.</p>
                            </div>
                            <div class="client-info">
                                <img src="assets/img/testimonial/testimonial-1.png" alt="image">
                                <h3>Gaadir Ramírez</h3>
                                <span>Jefe de Negocios</span>
                            </div>
                        </div>

                        <div class="single-testimonial-box" data-aos="fade-up" data-aos-duration="1600">
                            <div class="content-bg">
                                <ul>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star-half"></i>
                                    </li>
                                    <li>
                                        <span>(4.5)</span>
                                    </li>
                                </ul>
                                <p>¡Excelente plataforma para planificar escapadas! Encontré opciones de alojamiento
                                    perfectas y actividades interesantes. Aunque hubo un par de detalles menores, el
                                    proceso en general fue muy eficiente.</p>
                            </div>
                            <div class="client-info">
                                <img src="assets/img/testimonial/testimonial-2.png" alt="image">
                                <h3>Areli Solis</h3>
                                <span>Turista Local</span>
                            </div>
                        </div>

                        <div class="single-testimonial-box" data-aos="fade-up" data-aos-duration="2000">
                            <div class="content-bg">
                                <ul>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <span>(5.0)</span>
                                    </li>
                                </ul>
                                <p>La mejor aplicación para organizar cada detalle de mi viaje. Es intuitiva, rápida y
                                    ofrece opciones maravillosas. Recomiendo esta plataforma a todos los que busquen una
                                    experiencia inolvidable. ¡Cinco estrellas bien merecidas!</p>
                            </div>
                            <div class="client-info">
                                <img src="assets/img/testimonial/testimonial-3.png" alt="image">
                                <h3>Evelyn Olmedo</h3>
                                <span>Influencer</span>
                            </div>
                        </div>

                        <div class="single-testimonial-box" data-aos="fade-up" data-aos-duration="1200">
                            <div class="content-bg">
                                <ul>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star-half"></i>
                                    </li>
                                    <li>
                                        <span>(4.5)</span>
                                    </li>
                                </ul>
                                <p>¡Muy buena experiencia! Encontré alojamientos únicos y pude planificar mejor mi
                                    viaje. Solo recomendaría agregar algunas opciones de pago adicionales, pero en
                                    general quedé muy satisfecho y volvería a usarla para futuros viajes.</p>
                            </div>
                            <div class="client-info">
                                <img src="assets/img/testimonial/testimonial-4.png" alt="image">
                                <h3>Thiago Mercado</h3>
                                <span>Turista Extranjero</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Start Blog Area -->
            <div class="blog-area pb-60">
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                        <h2>Nuestro Blog</h2>
                        <p>Descubre las últimas novedades y consejos en nuestro blog. Aquí encontrarás artículos sobre
                            los mejores lugares para visitar, recomendaciones de restaurantes y tips para disfrutar al
                            máximo tu estancia.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1200">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="assets/img/blog/blog-1.jpg" alt="Blog Images">
                                        </a>
                                        <div class="blog-category">
                                            <a href="#">Historia de Papantla</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Los antecedentes de Papantla nos remiten al siglo
                                                XIII...</a></h5>

                                        <div class="read-more-btn">
                                            <a class="blog-btn" href="#">Leer Más <i
                                                    class="bx bx-right-arrow-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1400">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="assets/img/blog/blog-2.jpg" alt="Blog Images">
                                        </a>
                                        <div class="blog-category">
                                            <a href="#">Posada Familiar Papantla</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">Te hacen sentir como en casa. La anfitriona fue
                                                muy amable...</a></h5>

                                        <div class="read-more-btn">
                                            <a class="blog-btn" href="#">Leer Más <i
                                                    class="bx bx-right-arrow-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1600">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="assets/img/blog/blog-3.jpg" alt="Blog Images">
                                        </a>
                                        <div class="blog-category">
                                            <a href="#">El Tajin</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="#">A la palabra "Tajín" se le han dado varios
                                                significados...</a></h5>

                                        <div class="read-more-btn">
                                            <a class="blog-btn" href="#">Leer Más <i
                                                    class="bx bx-right-arrow-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Area -->

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
                                        <a href="#">
                                            Angel Salazar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Valeria Rivera
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Denisse Nava
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Jamin García
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Emir Jiménez
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
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
                let title;
                switch (type) {
                    case "login":
                        title = "Mensaje de Inicio de Sesión";
                        break;
                    case "register":
                        title = "Mensaje de Registro";
                        break;
                    case "logout":
                        title = "Mensaje de Cierre de Sesión";
                        break;
                    default:
                        title = "Mensaje";
                }

                document.getElementById("messageModalLabel").innerText = title;

                // Mostrar el modal
                const messageModal = new bootstrap.Modal(document.getElementById("messageModal"));
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