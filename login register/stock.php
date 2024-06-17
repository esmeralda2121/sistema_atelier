<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_atelier";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_stock = $_POST['id_stock'];
    $Disponibilidad = $_POST ['Disponibilidad'];
    $Detalles = $_POST['Detalles'];

    $sql = "INSERT INTO stock_disponible (id_stock, Disponibilidad , Detalles) VALUES ('$id_stock', '$Disponibilidad', '$Detalles')";

   if ($conn-> query($sql) === TRUE) {
        echo " Diseño agregado correctamente ";
    } else {
        echo "Error al agregar " 
        . $conn->error;
    }
}
$conn->close();