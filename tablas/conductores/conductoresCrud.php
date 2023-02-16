<?php
if (isset($_POST['juan'])) {

    //<img src="recursos/tablaDestino.jpg" alt="">
    //<img src="recursos/tablaSus.jpg" alt="">
    //<img src="recursos/tablaCamionero.png" alt="">
    $stmt = $conn->prepare("SELECT * FROM conductor");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    //echo '<a href="newGolfer.php"><h1>CREAR GOLFISTA</h1></a></br></br>';
    echo '<table width="100px" class="table table-striped">';
    echo '<tr><th>id</th><th>nombre</th><th>apellidos</th><th>dni</th><th>matricula</th><th>telefono</th><th>email</th><th>nacionalidad</th><th></th><th></th></tr>';
    foreach ($result as $row) {
        echo "<tr><td>" . $row["id_conductor"] . "</td>"
            . "<td>" . $row["nombre"] . "</td>"
            . "<td>" . $row["apellidos"] . "</td>"
            . "<td>" . $row["dni"] . "</td>"
            . "<td>" . $row["matricula"] . "</td>"
            . "<td>" . $row["telefono"] . "</td>"
            . "<td>" . $row["email"] . "</td>"
            . "<td>" . $row["nacionalidad"] . "</td>"
            . "<td>" . "<a href='tablas/conductores/borrar.php'>borrar</a>" . "</td>"
            . "<td>" . "borrar" . "</td></tr>";
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