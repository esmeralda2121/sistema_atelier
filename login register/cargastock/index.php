<div>
    <br>
    <br>
    <br>
     <link rel="stylesheet" href="estiles.css">
    <title>Agregar Nuevo Diseño</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <h1>Agregar Nuevo Diseño</h1>

    <div class="container mt-5">
        <form action="stock.php" method="post" id="miFormulario3">

            <div class="form-group">
                <label for="id_stock">N° stock</label>
                <input type="text" class="form-control" id="id_stock" name="id_stock" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Disponibilidad">Disponibilidad</label>
                <input type="text" class="form-control" id="Disponibilidad" name="Disponibilidad" required>
            </div>
            <br>
            <div class="form-group">
                <label for="Detalles">Detalles</label>
                <input type="text" class="form-control" id="Detalles" name="Detalles" required>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Agregar Diseño</button>
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
            url: 'stock.php', // Reemplaza 'tu_script_php.php' con el nombre de tu script PHP
            data: formData,
            success: function(response){
                $('#mensaje').html(response); // Muestra la respuesta del servidor en un elemento HTML
            }
        });
    });
});
</script>


</div>