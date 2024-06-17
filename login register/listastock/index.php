<div class="container mt-5">
    <link rel="stylesheet" href="estiles.css">
    <h2>Stock </h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Disponibilidad</th>
                <th>Detalles</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
                $scon = mysqli_connect('localhost', 'root', '', 'login_atelier');

                if (!$scon) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id_stock, Disponibilidad, Detalles  FROM stock_disponible";

                $result = mysqli_query($scon, $sql);


                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_stock"] . "</td>";
                        echo "<td>" . $row["Disponibilidad"] . "</td>";
                        echo "<td>" . $row["Detalles"] . "</td>";
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

    <button class="btn btn-success">Agregar Diseño</button>
</div>
