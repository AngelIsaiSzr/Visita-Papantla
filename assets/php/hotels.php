<?php
// Conectar a la base de datos
$servername = "localhost:3309";
$username = "root";
$password = "moreno15";
$dbname = "visitapapantla";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM hoteles";
$result = $conn->query($sql);
?>

    <?php while($row = $result->fetch_assoc()): ?>
        <div class="room-item shadow rounded overflow-hidden">
            <div class="position-relative">
                <img class="img-fluid" src="<?php echo $row['image']; ?>" alt="">
                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$<?php echo $row['price']; ?> / Noche</small>
            </div>
            <div class="p-4 mt-2">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="mb-0"><?php echo $row['name']; ?></h5>
                    <div class="ps-2">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <small class="bx bxs-star text-primary"></small>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="features d-flex mb-3">
                    <span class="border-end me-3 pe-3"><i class="bx bx-bed text-primary me-2"></i><?php echo $row['beds']; ?> Bed</span>
                    <span class="border-end me-3 pe-3"><i class="bx bx-bath text-primary me-2"></i><?php echo $row['baths']; ?> Bath</span>
                    <span><i class="bx bx-wifi text-primary me-2"></i>Wifi</span>
                </div>
                <p class="text-body mb-3"><?php echo $row['description']; ?></p>
                <div class="d-flex justify-content-between">
                    <a class="btn style1 rounded py-2 px-4" href="room-details.php?id=<?php echo $row['id']; ?>">Ver Detalles</a>
                    <a class="btn style2 rounded py-2 px-4" href="booking-form.php?id=<?php echo $row['id']; ?>">Reserva Ahora</a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

<?php $conn->close(); ?>