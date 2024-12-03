<?php
session_start();
include 'assets/config/db.php';

// Realizar la consulta para obtener los nombres de los hoteles
$sql = "SELECT id_hotel, nombre FROM hoteles";
$result = $link->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Crear el array de opciones
    $hoteles = [];
    while ($row = $result->fetch_assoc()) {
        $hoteles[] = $row;
    }
} else {
    $hoteles = [];
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
                                <h2>Reservar</h2>
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">
                                                <i class="bx bx-home-circle"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Reservar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadscrumb Section End -->

            <!-- Start Booking Form -->
            <section class="booking-area ptb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div data-aos="fade-up" data-aos-duration="1200" class="booking-form-title">
                                <h2>Reserva y Disfruta de tu Visita a Papantla de la Forma Más Cómoda</h2>
                            </div>
                            <nav class="booking-tabs-button ptb-40">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#hotels"
                                        type="button" role="tab" aria-selected="true">
                                        Hoteles
                                    </button>
                                </div>
                            </nav>
                            <div class="product-tabs-content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="hotels" role="tabpanel">
                                        <div class="col-12 contact-form book-form">
                                            <h2>Reservar Habitaciones</h2>
                                            <form action="assets/process/booking.php" method="POST">
                                                <div class="row">
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Nombre</label>
                                                        <input type="text" class="form-control" name="nombre"
                                                            placeholder="Nombre" required>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Apellidos</label>
                                                        <input type="text" class="form-control" name="apellidos"
                                                            placeholder="Apellidos" required>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Correo</label>
                                                        <input type="email" class="form-control" name="correo"
                                                            placeholder="Correo" required>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Teléfono</label>
                                                        <input type="tel" class="form-control" name="telefono"
                                                            placeholder="Teléfono" required>
                                                    </div>
                                                    <div class="mt-4 col-md-12">
                                                        <label class="form-label">Hotel</label>
                                                        <select class="form-control" name="hotel" required>
                                                            <option value="" disabled selected>Selecciona un Hotel</option>
                                                            <?php
                                                            foreach ($hoteles as $hotel) {
                                                                echo '<option value="' . htmlspecialchars($hotel['id_hotel']) . '">' . htmlspecialchars($hotel['nombre']) . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Check-in</label>
                                                        <input type="date" class="form-control" name="check-in" required>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Check-out</label>
                                                        <input type="date" class="form-control" name="check-out" required>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Adultos</label>
                                                        <select class="form-control" name="adultos" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Niños</label>
                                                        <select class="form-control" name="niños" required>
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Habitación</label>
                                                        <select class="form-control" name="habitacion" required>
                                                            <option value="" disabled selected>Selecciona una Habitación</option>
                                                            <option>Habitación Sencilla</option>
                                                            <option>Habitación Doble</option>
                                                            <option>Habitación Triple</option>
                                                            <option>Habitación King Size</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-4 col-md-6">
                                                        <label class="form-label">Noches</label>
                                                        <select class="form-control" name="noches" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary mt-4 style3 icon"
                                                            type="submit"><i
                                                                class="bx bx-plus-circle"></i>Reservar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Booking Form -->

        </div>
        <!-- Main Wrapper End -->

        <!-- Footer Section Start -->
        <?php include_once 'assets/inc/footer.php'; ?>
        <!-- Footer Section End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Modal -->
    <div class="modal fade" id="messageModal" tabindex="999" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Mensaje de Reservación</h5>
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

            if (message) {
                document.getElementById("modalMessage").innerText = decodeURIComponent(message);

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