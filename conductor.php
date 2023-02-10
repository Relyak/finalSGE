<?php 
require('check_login.php');
require('db.php');

?>
<html>
    <head>
        <title>Welcome to LAMP Infrastructure</title>
        <meta charset="utf-8">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>Tabla conductores</h1>";

                $stmt = $conn->prepare("SELECT * FROM conductor");
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //var_dump($result);
                //echo '<a href="newGolfer.php"><h1>CREAR GOLFISTA</h1></a></br></br>';
                echo '<table class="table table-striped">';
                echo '<tr><th>id</th><th>nombre</th><th>apellidos</th><th>dni</th><th>matricula</th><th>telefono</th><th>email</th><th>nacionalidad</th></tr>';
                
                foreach ($result as $row) {
                    echo "<tr><td>".$row["id_conductor"] ."</td>" ."<td>" .$row["nombre"] . "</td></tr>  ";
                    // . $row["apellidos"]. " - "; 
                    //echo $row["dni"] ." - ".$row["matricula"]." - " .$row["telefono"]. " ";
                    //echo $row["email"] ." - ".$row["nacionalidad"];
                    //echo "<a href='editarGolfer.php?id=".$row["id"]."'>Editar</a> <a href='deleteGolfer.php?id=".$row["id"]."'>Borrar</a><br/>" ;
                }          
                echo '</table>';
                //$result->close();
                //mysqli_close($conn);
            ?>
        </div>
    </body>
</html>