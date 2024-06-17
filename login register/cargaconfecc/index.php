<div>
    <br>
    <br>
    <br>
     <link rel="stylesheet" href="estiles.css">
    <title>Agregar Nueva Confeccion</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Agregar Nueva Confeccion</h1>

    <div class="container mt-5">
        <form action="confecciones.php" method="post" id="miFormulario3">

            <br>
            <div class="form-group">
                <label for="id_clientes">N° cliente</label>
                <input type="text" class="form-control" id="id_clientes" name="id_clientes" required>
            </div>
            <br>
            <div class="form-group">
                <label for="id_turnos">N° turno</label>
                <input type="text" class="form-control" id="id_turnos" name="id_turnos" required>
            </div>
            <br>
            <div class="form-group">
                <label for="medidas">Medidas </label>
                <input type="text" class="form-control" id="medidas" name="medidas" required>
            </div>
            <div class="form-group">
                <label for="genero">Genero </label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="id_productos">Producto</label>
                <input type="text" class="form-control" id="id_productos" name="id_productos" required>
            </div>
            <div class="form-group">
                <label for="seña">Seña</label>
                <input type="text" class="form-control" id="seña" name="seña" required>
            </div>
            <div class="form-group">
                <label for="fecha_entrega">Fecha de entrega</label>
                <input type="text" class="form-control" id="fecha_entrega" name="fecha_entrega" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar diseño</button>
        </form>
    </div>


    <div id="mensaje"></div>

<script>
$(document).ready(function(){
    $('#miFormulario3').submit(function(e){
        e.preventDefault(); // Evita que el formulario se envíe por defecto

        // Obtiene los datos del formulario
        var formData = $(this).serialize();

        // Envía los datos al servidor utilizando AJAX
        $.ajax({
            type: 'POST',
            url: 'confecciones.php', // Reemplaza 'tu_script_php.php' con el nombre de tu script PHP
            data: formData,
            success: function(response){
                $('#mensaje').html(response); // Muestra la respuesta del servidor en un elemento HTML
            }
        });
    });
});
</script>


</div>