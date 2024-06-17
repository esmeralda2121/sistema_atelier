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

    $id_cliente = $_POST['id_cliente'];
    $Factura = $_POST ['Factura'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];

    $sql = "INSERT INTO venta (id_cliente, Factura , Fecha, Hora) VALUES ('$id_cliente', '$Factura', '$Fecha', '$Hora')";

   if ($conn-> query($sql) === TRUE) {
        echo " Venta agregado correctamente ";
    } else {
        echo "Error al agregar venta " 
        . $conn->error;
    }
}
$conn->close();
