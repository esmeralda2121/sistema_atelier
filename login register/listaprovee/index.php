<div class="container mt-5">
    <link rel="stylesheet" href="estiles.css">
    <h2>Lista de Proveedores</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Domicilio</th>
                <th>Marca</th>
                <th>Producto</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $scon = mysqli_connect('localhost', 'root', '', 'login_atelier');

                if (!$scon) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id_proveedor, nombre, telefono, domicilio, marca, producto FROM proveedores";

                $result = mysqli_query($scon, $sql);

             
             
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_proveedor"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["telefono"] . "</td>";
                        echo "<td>" . $row["domicilio"] . "</td>";
                        echo "<td>" . $row["marca"] . "</td>";
                        echo "<td>" . $row["producto"] . "</td>";
                        echo '<td> 
                                <button class="btn btn-primary btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                              </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No hay contactos disponibles.</td></tr>";
                }

                mysqli_close($scon);
            ?>
        </tbody>
    </table>

    <button class="btn btn-success">Agregar Proveedor</button>
</div>
