<div>
    <br>
    <br>
    <br>
     <link rel="stylesheet" href="estiles.css">
    <title>Agregar Nuevo Proveedor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Agregar Nuevo Proveedor</h1>

    <div class="container mt-5">
        <form action="provee.php" method="post" id="miFormulario3">

            <div class="form-group">
                <label for="nombre">Nombre Completo </label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <br>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <br>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" required>
            </div>
            <br>
            <div class="form-group">
                <label for="marca">Fecha de entrega:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="producto">Fecha de devolucion:</label>
                <input type="text" class="form-control" id="producto" name="producto" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
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
            url: 'provee.php', // Reemplaza 'tu_script_php.php' con el nombre de tu script PHP
            data: formData,
            success: function(response){
                $('#mensaje').html(response); // Muestra la respuesta del servidor en un elemento HTML
            }
        });
    });
});
</script>


</div>