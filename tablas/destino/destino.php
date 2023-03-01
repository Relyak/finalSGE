<?php
    //<img src="recursos/tablaDestino.jpg" alt="">
    //<img src="recursos/tablaSus.jpg" alt="">
    //<img src="recursos/tablaCamionero.png" alt="">
    if (isset($_POST['destino'])) {
    $stmt = $conn->prepare("SELECT * FROM destino");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    //echo '<a href="newGolfer.php"><h1>CREAR GOLFISTA</h1></a></br></br>';
    echo '<h3>Destino</h3>';
    echo '<table width="100px" class="table table-striped">';
    echo '<tr><th>Id</th><th>CIF</th><th>Nombre</th><th>Dirección</th><th></th><th><a href=tablas/destino/crud/PagCrear.php>Añadir</a></th></tr>';
    foreach ($result as $row) {
        echo "<tr><td>" . $row["id"] . "</td>"
            . "<td>" . $row["cif"] . "</td>" 
            . "<td>" . $row["nombre"] . "</td>"
            . "<td>" . $row["direccion"] . "</td>"
            . "<td>" . "<a href='tablas/destino/crud/PagEditar.php?id=".$row["id"]."'>Editar</a>" . "</td>"
            . "<td>" . "<a href='tablas/destino/crud/borrarDestino.php?id=".$row["id"]."'>Borrar</a>" . "</td></tr>";
        // . $row["apellidos"]. " - "; 
        //echo $row["dni"] ." - ".$row["matricula"]." - " .$row["telefono"]. " ";
        //echo $row["email"] ." - ".$row["nacionalidad"];
        //echo "<a href='editarGolfer.php?id=".$row["id"]."'>Editar</a> <a href='deleteGolfer.php?id=".$row["id"]."'>Borrar</a><br/>" ;
    }
    echo '</table>';
    //$result->close();
    //mysqli_close($conn);
}
?>