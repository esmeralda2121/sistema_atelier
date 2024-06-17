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

    
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $domicilio = $_POST['domicilio'];
    $marca = $_POST['marca'];
    $producto = $_POST ['producto'];


    $sql = "INSERT INTO proveedores (nombre,telefono,domicilio, marca , producto) VALUES ('$nombre','$telefono','$domicilio','$marca', '$producto')";

   if ($conn-> query($sql) === TRUE) {
        echo " Proveedor agregado correctamente ";
    } else {
        echo "Error al agregar " 
        . $conn->error;
    }
}
$conn->close();
