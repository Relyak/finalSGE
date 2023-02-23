<?php
if (isset($_POST['conductor'])) {
    //<img src="recursos/tablaDestino.jpg" alt="">
    //<img src="recursos/tablaSus.jpg" alt="">
    //<img src="recursos/tablaCamionero.png" alt="">
    $stmt = $conn->prepare("SELECT * FROM conductor");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    //echo '<a href="newGolfer.php"><h1>CREAR GOLFISTA</h1></a></br></br>';
    echo '<table width="100px" id="tableSQL" class="table table-striped">';
    echo '<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Dni</th><th>Matrícula</th><th>Teléfono</th><th>Email</th><th>Nacionalidad</th><th><a href=tablas/conductores/crud/PagCrear.php>Añadir</a></th><th></th></tr>';
    echo '<tr><td colspan="100"><input style="width:100%;" type="text" id="tablaBuscar" placeholder="Escriba para buscar"/></td></tr>';
    echo '<h3>Conductores</h3>';
    echo '<table width="100px" class="table table-striped">';
    echo '<tr><th>Id</th><th>Nombre</th><th>Apellidos</th><th>Dni</th><th>Matrícula</th><th>Teléfono</th><th>Email</th><th>Nacionalidad</th><th></th><th><a href=tablas/conductores/crud/PagCrear.php>Añadir</a></th></tr>';
    foreach ($result as $row) {
        echo "<tr><td>" . $row["id"] . "</td>"
            . "<td>" . $row["nombre"] . "</td>" 
            . "<td>" . $row["apellidos"] . "</td>"
            . "<td>" . $row["dni"] . "</td>"
            . "<td>" . $row["matricula"] . "</td>"
            . "<td>" . $row["telefono"] . "</td>"
            . "<td>" . $row["email"] . "</td>"
            . "<td>" . $row["nacionalidad"] . "</td>"
            . "<td>" . "<a href='tablas/conductores/crud/PagEditar.php?id=".$row["id"]."'>Editar</a>" . "</td>"
            . "<td>" . "<a href='tablas/conductores/crud/borrarConductor.php?id=".$row["id"]."'>Borrar</a>" . "</td></tr>";
        // . $row["apellidos"]. " - "; 
        //echo $row["dni"] ." - ".$row["matricula"]." - " .$row["telefono"]. " ";
        //echo $row["email"] ." - ".$row["nacionalidad"];
        //echo "<a href='editarGolfer.php?id=".$row["id"]."'>Editar</a> <a href='deleteGolfer.php?id=".$row["id"]."'>Borrar</a><br/>" ;
    }
    echo '</table>';
    echo '<script type="text/javascript" src="TablaBuscador/TablaBuscador.js"></script>';
    //$result->close();
    //mysqli_close($conn);
}
?>