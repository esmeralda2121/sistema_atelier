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

    $Nombre = $_POST['Nombre'];
    $DNI = $_POST ['DNI'];
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];

    $sql = "INSERT INTO clientes (Nombre, DNI , Telefono, Correo) VALUES ('$Nombre', '$DNI', '$Telefono', '$Correo')";

   if ($conn-> query($sql) === TRUE) {
        echo " Cliente agregado correctamente ";
    } else {
        echo "Error al agregar Cliente " 
        . $conn->error;
    }
}
$conn->close();
