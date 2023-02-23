<?php
    //<img src="recursos/tablaDestino.jpg" alt="">
    //<img src="recursos/tablaSus.jpg" alt="">
    //<img src="recursos/tablaCamionero.png" alt="">T
    if (isset($_POST['origen'])) {
    $stmt = $conn->prepare("SELECT * FROM origen");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>Origen</h3>';
    echo '<table width="100px" class="table table-striped">';
    echo '<tr><th>Id</th><th>Nombre</th><th>Ciudad</th><th>CP</th><th>Teléfono</th><th>Dirección</th><th></th><th><a href=tablas/origen/crud/PagCrear.php>Añadir</a></th></tr>';
    foreach ($result as $row) {
        echo "<tr><td>" . $row["id"] . "</td>"
            . "<td>" . $row["nombre"] . "</td>" 
            . "<td>" . $row["ciudad"] . "</td>"
            . "<td>" . $row["cp"] . "</td>"
            . "<td>" . $row["telefono"] . "</td>"
            . "<td>" . $row["direccion"] . "</td>"
            . "<td>" . "<a href='tablas/origen/crud/PagEditar.php?id=".$row["id"]."'>Editar</a>" . "</td>"
            . "<td>" . "<a href='tablas/origen/crud/borrarOrigen.php?id=".$row["id"]."'>Borrar</a>" . "</td></tr>";
    }
    echo '</table>';
    //$result->close();
    //mysqli_close($conn);
}
?>