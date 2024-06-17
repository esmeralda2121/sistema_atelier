<div>
    <br>
    <br>
    <br>
     <link rel="stylesheet" href="estiles.css">
    <title>Agregar Nueva Venta</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Agregar Nueva Venta</h1>

    <div class="container mt-5">
        <form action="venta.php" method="post" id="miFormulario3">

            <div class="form-group">
                <label for="id_cliente">Id cliente</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Factura">Factura</label>
                <input type="text" class="form-control" id="Factura" name="Factura" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Fecha">Fecha</label>
                <input type="text" class="form-control" id="Fecha" name="Fecha" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Hora">Hora</label>
                <input type="text" class="form-control" id="Hora" name="Hora" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Agregar Venta</button>
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
            url: 'venta.php', // Reemplaza 'tu_script_php.php' con el nombre de tu script PHP
            data: formData,
            success: function(response){
                $('#mensaje').html(response); // Muestra la respuesta del servidor en un elemento HTML
            }
        });
    });
});
</script>


</div>