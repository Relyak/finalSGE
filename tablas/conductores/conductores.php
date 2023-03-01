<?php
if (isset($_POST['conductor'])) {

    //Utiliza el Statement para realizar la query
    $stmt = $conn->prepare("SELECT * FROM conductor");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Construimos la tabla y sus respectivos títulos
    echo '<table width="100px" id="tabla" class="table table-striped">';
    echo '<tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Dni</th>
                <th>Matrícula</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Nacionalidad</th>
                <th></th>
                <th><a href=tablas/conductores/crud/PagCrear.php>Añadir</a></th>
            </tr>';

    echo '<h3>Conductores</h3>';
    echo '<tr>
                <td colspan="100"><input style="width:100%;" type="text" id="buscar" placeholder="Escriba para buscar"/></td>
            </tr>';

    //Inserta en la tabla los datos extraídos de la base de datos
    foreach ($result as $row) {
        echo
            "<tr>
               <td>" . $row["id"] . "</td>"
            . "<td>" . $row["nombre"] . "</td>"
            . "<td>" . $row["apellidos"] . "</td>"
            . "<td>" . $row["dni"] . "</td>"
            . "<td>" . $row["matricula"] . "</td>"
            . "<td>" . $row["telefono"] . "</td>"
            . "<td>" . $row["email"] . "</td>"
            . "<td>" . $row["nacionalidad"] . "</td>"
            . "<td>" . "<a href='tablas/conductores/crud/PagEditar.php?id=" . $row["id"] . "'>Editar</a>" . "</td>"
            . "<td>" . "<a href='tablas/conductores/crud/borrarConductor.php?id=" . $row["id"] . "'>Borrar</a>" . "</td>
            </tr>";
    }

    echo '</table>';


    //Utiliza el código Javascript para crear la barra filtradora
    echo '<script type="text/javascript" src="TablaBuscador/TablaBuscador.js"></script>';

}
?>