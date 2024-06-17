<div>
    <br>
    <br>
    <br>
     <link rel="stylesheet" href="estiles.css">
    <title>Agregar Nuevo Alquiler</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Agregar Nuevo Alquiler</h1>

    <div class="container mt-5">
        <form action="alquiler.php" method="post" id="miFormulario3">

            <div class="form-group">
                <label for="id_turno">N° turno </label>
                <input type="text" class="form-control" id="id_turno" name="id_turno" required>
            </div>
            <br>
            <div class="form-group">
                <label for="id_cliente">N° cliente</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" required>
            </div>
            <br>
            <div class="form-group">
                <label for="id_stock">N° diseño</label>
                <input type="text" class="form-control" id="id_stock" name="id_stock" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Fecha_entrega">Fecha de entrega:</label>
                <input type="text" class="form-control" id="Fecha_entrega" name="Fecha_entrega" required>
            </div>
            <div class="form-group">
                <label for="Fecha_devolucion">Fecha de devolucion:</label>
                <input type="text" class="form-control" id="Fecha_devolucion" name="Fecha_devolucion" required>
            </div>
            <div class="form-group">
                <label for="Factura">Factura:</label>
                <input type="text" class="form-control" id="Factura" name="Factura" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Alquiler</button>
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
            url: 'alquiler.php', // Reemplaza 'tu_script_php.php' con el nombre de tu script PHP
            data: formData,
            success: function(response){
                $('#mensaje').html(response); // Muestra la respuesta del servidor en un elemento HTML
            }
        });
    });
});
</script>


</div>