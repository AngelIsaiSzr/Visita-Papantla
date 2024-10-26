<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://tripadvisor-scraper.p.rapidapi.com/hotels/list?query=papantla&page=1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: tripadvisor-scraper.p.rapidapi.com",
        "x-rapidapi-key: 3228a669c5msha85c72c8dce422bp1a1b24jsn107e502f6bd6"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $data = json_decode($response, true);

    // Conectar a la base de datos
    $servername = "localhost:3309";
    $username = "root";
    $password = "moreno15";
    $dbname = "visitapapantla";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Establecer la codificación de caracteres a utf8mb4
    $conn->set_charset("utf8mb4");

    // Preparar e insertar datos en la tabla
    $stmt = $conn->prepare("INSERT INTO hoteles (nombre, direccion, estrellas, telefono) VALUES (?, ?, ?, ?)");

    // Estructura del JSON
    foreach ($data['results'] as $hotel) { 
        $nombre = $hotel['name'] ?? 'Sin nombre';
        $direccion = $hotel['address'] ?? 'Sin dirección';
        $estrellas = $hotel['rating'] ?? null; 
        $telefono = $hotel['phone'] ?? 'Sin teléfono'; 

        $stmt->bind_param("ssds", $nombre, $direccion, $estrellas, $telefono);
        
        if (!$stmt->execute()) {
            echo "Error al insertar: " . $stmt->error . "\n";
        }
    }

    $stmt->close();
    $conn->close();

    echo "Datos insertados correctamente.";
}
?>