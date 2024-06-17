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

    $id_confeciones = $_POST['id_confeciones'];
    $id_clientes = $_POST['id_clientes'];
    $id_turnos = $_POST['id_turnos'];
    $medidas = $_POST['medidas'];
    $genero = $_POST ['genero'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    $id_productos = $_POST['id_productos'];
    $seña = $_POST['seña'];
    $fecha_entrega = $_POST['fecha_entrega'];


    $sql = "INSERT INTO confecciones (id_confeciones, id_clientes,id_turnos,medidas, genero , color, precio,id_productos, seña,fecha_entrega) VALUES ('$id_confeciones','$id_clientes','$id_turnos','$medidas', '$genero','$color','$precio','$id_productos','$seña', '$fecha_entrega')";

    if ($conn-> query($sql) === TRUE) {
        echo " Diseño agregado correctamente ";
    } else {
        echo "Error al agregar el diseño " 
        . $conn->error;
    }
}
$conn->close();