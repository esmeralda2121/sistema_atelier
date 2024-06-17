<?php
session_start();

// Verificar si la sesión no está iniciada
if (!isset($_SESSION['correoE'])) {
    // Si la sesión no está iniciada, redirigir al usuario a la página de inicio de sesión
    echo '
        <script> 
        alert("Por favor, debes iniciar sesión");
        window.location = "index.php";
        </script>
    ';
    exit;
}

// Si la sesión está iniciada, mostrar el contenido de la página
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Atelier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color:#000 ;
        }
    </style>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <a class="navbar-brand mx-auto" href="#">
        <img src="imagenes/klipartz.com.png" alt="Logo" height="70">
    </a>
    <div class="container-fluid">
        <a class="navbar-brand" href="php/cerrar_sesion.php">Cerrar Sesión</a>
    </div>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="HOME2.php" id="HOME2-link">Catalogo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stock</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="listastock-link" href="#">Stock Disponible</a></li>
                        <li><a class="dropdown-item" id="cargastock-link" href="#">Carga de Stock</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="usuarios-link">Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Clientes</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="listacliente-link" href="#">Lista de Clientes</a></li>
                        <li><a class="dropdown-item" id="cargacliente-link" href="#">Carga de Clientes</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alquiler</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="listaalquiler-link" href="#">Lista de Alquileres</a></li>
                        <li><a class="dropdown-item" id="cargaalquiler-link" href="#">Carga Alquiler</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ventas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="listaventa-link" href="#">Lista de Ventas</a></li>
                        <li><a class="dropdown-item" id="cargaventa-link" href="#">Cargar de Ventas</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Confecciones</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="listaconfecc-link" href="#">Lista Confecciones</a></li>
                        <li><a class="dropdown-item" id="cargaconfecc-link" href="#">Nueva confeccion </a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Proveedores</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" id="listaprovee-link" href="#">Lista de Proveedores</a></li>
                        <li><a class="dropdown-item" id="cargaprovee-link" href="#">Carga de Proveedor</a></li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
            </ul>   
        </div>
    </div>
</nav>

<div class="container mt-5 pt-5" id="workspace">

<link rel="stylesheet" href="estiles.css">
    
    <div id="carouselExampleDark" class="carousel carousel-dark slide mx-auto" data-bs-ride="carousel">
        <link rel="stylesheet" href="estiles.css">
    
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
            
    
        <div class="catalogo">
            <link rel="stylesheet" href="styles.css">
            <!-- Prenda 1 -->
            <div class="prenda">
                <img src="img/Novia1.jpg" alt="Novia">
                <h2>Vestido Tiffany</h2>
                <p>Precio: $250,000</p>
            </div>
            <!-- Prenda 2 -->
             <div class="prenda">
                <img src="img/DamaHonor2.jpg" alt="Novia">
                <h2>Dama de Honor</h2>
                <p>Precio: $450,000</p>
            </div>
            <div class="prenda">
                <img src="img/DamaHonor.jpg" alt="DamaHonor">
                <h2>Dama de Honor</h2>
                <p>Precio: $780,000</p>
            </div>
            <!-- Prenda 3 -->
            <div class="prenda">
                <img src="img/Quinceañera3.jpg" alt="Quinceañera">
                <h2>Quince Años</h2>
                <p>Precio: $80,000</p>
            </div>
        </div>
        <div class="catalogo">
            <!-- Prenda 1 -->
            <div class="prenda">
                <img src="img/Novia3.jpg" alt="Novia">
                <h2>Vestido estilo Colon</h2>
                <p>Precio: $850,000</p>
            </div>
            <!-- Prenda 2 -->
            <div class="prenda">
                <img src="img/evento.jfif" alt="DamaHonor">
                <h2>Dama de Honor</h2>
                <p>Precio: $40,000</p>
            </div>
            <div class="prenda">
                <img src="img/evento1.jfif" alt="DamaHonor">
                <h2>Dama de Honor</h2>
                <p>Precio: $40,000</p>
            </div>
            <!-- Prenda 3 -->
            <div class="prenda">
                <img src="img/Quinceañera1.jpg" alt="Quinceañera">
                <h2>Quince Años</h2>
                <p>Precio: $60,000</p>
            </div>
        </div>
    
    <script src="scrip1.js"></script>
        
</div>

<script>
    $(document).ready(function () {
        // Example of dynamically loading content via jQuery (ensure these files exist)
        $("#HOME2-link").click(function () {
            $.get("HOME2.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#usuarios-link").click(function () {
            $.get("usuarios/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listacliente-link").click(function () {
            $.get("listacliente/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargacliente-link").click(function () {
            $.get("cargacliente/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listaalquiler-link").click(function () {
            $.get("listaalquiler/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargaalquiler-link").click(function () {
            $.get("cargaalquiler/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listaventa-link").click(function () {
            $.get("listaventa/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargaventa-link").click(function () {
            $.get("cargaventa/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#listaconfecc-link").click(function () {
            $.get("listaconfecc/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargaconfecc-link").click(function () {
            $.get("cargaconfecc/index.php", function (data) {
                $("#workspace").html(data);
            });
        });
        $("#listastock-link").click(function () {
            $.get("listastock/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargastock-link").click(function () {
            $.get("cargastock/index.php", function (data) {
                $("#workspace").html(data);
            });
        });
        $("#listaprovee-link").click(function () {
            $.get("listaprovee/index.php", function (data) {
                $("#workspace").html(data);
            });
        });

        $("#cargaprovee-link").click(function () {
            $.get("cargaprovee/index.php", function (data) {
                $("#workspace").html(data);
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
