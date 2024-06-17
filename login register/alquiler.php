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

    
    $id_turno = $_POST['id_turno'];
    $id_cliente = $_POST['id_cliente'];
    $id_stock = $_POST['id_stock'];
    $Fecha_entrega = $_POST['Fecha_entrega'];
    $Fecha_devolucion = $_POST ['Fecha_devolucion'];
    $Factura = $_POST['Factura'];


    $sql = "INSERT INTO alquiler (id_turno,id_cliente,id_stock, Fecha_entrega , Fecha_devolucion, Factura) VALUES ('$id_turno','$id_cliente','$id_stock','$Fecha_entrega', '$Fecha_devolucion','$Factura')";

   if ($conn-> query($sql) === TRUE) {
        echo " Agregado correctamente ";
    } else {
        echo "Error al agregar " 
        . $conn->error;
    }
}
$conn->close();
