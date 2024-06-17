<div class="container mt-5">
    <link rel="stylesheet" href="estiles.css">
    <h2>Lista de Confecciones</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>N° cliente</th>
                <th>N° turno</th>
                <th>Medidas</th>
                <th>Genero</th>
                <th>Color</th>
                <th>Precio</th>
                <th>N° producto</th>
                <th>Seña</th>
                <th>Fecha de entrega</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php
                $scon = mysqli_connect('localhost', 'root', '', 'login_atelier');

                if (!$scon) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id_clientes, id_turnos,medidas ,genero ,color ,precio , id_productos, seña, Fecha_entrega FROM confecciones";

                $result = mysqli_query($scon, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_clientes"] . "</td>";
                        echo "<td>" . $row["id_turnos"] . "</td>";
                        echo "<td>" . $row["medidas"] . "</td>";
                        echo "<td>" . $row["genero"] . "</td>";
                        echo "<td>" . $row["color"] . "</td>";
                        echo "<td>" . $row["precio"] . "</td>";
                        echo "<td>" . $row["id_productos"] . "</td>";
                        echo "<td>" . $row["seña"] . "</td>";
                        echo "<td>" . $row["Fecha_entrega"] . "</td>";
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

    <button class="btn btn-success">Agregar Alquiler</button>
</div>
