
<div class="container mt-5">
    <link rel="stylesheet" href="estiles.css">
    <h2>Lista de los Clientes</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>DNI</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
                $scon = mysqli_connect('localhost', 'root', '', 'login_atelier');

                if (!$scon) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT id_cliente, Nombre, DNI, Telefono, Correo FROM clientes";

                $result = mysqli_query($scon, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id_cliente"] . "</td>";
                        echo "<td>" . $row["Nombre"] . "</td>";
                        echo "<td>" . $row["DNI"] . "</td>";
                        echo "<td>" . $row["Telefono"] . "</td>";
                        echo "<td>" . $row["Correo"] . "</td>";
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

    <button class="btn btn-success">Agregar</button>
</div>
