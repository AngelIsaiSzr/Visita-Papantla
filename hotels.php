<?php
// Iniciar la sesión
session_start();

// Conectar a la base de datos
$host_name = 'db5016594095.hosting-data.io';
$database = 'dbs13455695';
$user_name = 'dbu5410004';
$password = 'VisitaPapantla@0';

$link = new mysqli($host_name, $user_name, $password, $database);

if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: ' . $link->connect_error . '</p>');
}

// Establecer la codificación de caracteres a utf8mb4
$link->set_charset("utf8mb4");

// Consulta para obtener los hoteles
$sql = "SELECT * FROM hoteles";
$result = $link->query($sql);
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
                                <h2>Hoteles</h2>
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="index.php">
                                                <i class="bx bx-home-circle"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Hoteles</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadscrumb Section End -->

            <!-- Hotel Section Start -->
            <div class="hotel-area ptb-60">
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                        <h2>Descubre los Mejores Hoteles en Papantla</h2>
                        <p>Explora una variedad de hoteles en Papantla, donde encontrarás comodidad y hospitalidad.
                            Desde opciones económicas hasta lujosos resorts, hay algo para cada viajero. ¡Tu aventura
                            comienza aquí!</p>
                    </div>
                    <div class="row justify-content-center">
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="hotel-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="<?= htmlspecialchars($row['imagen']) ?>"
                                                alt="Imagen de <?= htmlspecialchars($row['nombre']) ?>">
                                            <small
                                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                                $<?= number_format($row['precio'], 0) ?> / Noche
                                            </small>
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0"><?= htmlspecialchars($row['nombre']) ?></h5>
                                                <div class="ps-2">
                                                    <?php
                                                    $estrellas = $row['estrellas'];
                                                    $entero = floor($estrellas); // Parte entera de las estrellas
                                                    $decimal = $estrellas - $entero; // Parte decimal
                                            
                                                    // Genera estrellas llenas
                                                    for ($i = 1; $i <= $entero; $i++): ?>
                                                        <small class="bx bxs-star text-primary"></small>
                                                    <?php endfor;

                                                    // Genera estrella a la mitad si corresponde
                                                    if ($decimal === 0.5): ?>
                                                        <small class="bx bxs-star-half text-primary"></small>
                                                    <?php elseif ($decimal > 0.5 && $entero < 5): ?>
                                                        <small class="bx bxs-star text-primary"></small>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="features d-flex mb-3">
                                                <span class="border-end me-3 pe-3"><i
                                                        class="bx bx-bed text-primary me-2"></i>Normal</span>
                                                <span class="border-end me-3 pe-3"><i
                                                        class="bx bx-bath text-primary me-2"></i>Ducha</span>
                                                <span><i class="bx bx-wifi text-primary me-2"></i>Wifi</span>
                                            </div>
                                            <p class="text-body mb-3"><?= htmlspecialchars($row['descripcion']) ?></p>
                                            <div class="d-flex justify-content-between">
                                                <a class="btn style1 rounded py-2 px-4" href="#">Ver Detalles</a>
                                                <a class="btn style2 rounded py-2 px-4" href="#">Reservar Ahora</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No se encontraron hoteles disponibles.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- Hotel Section End -->

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
<?php $link->close(); ?>