<?php 
require('check_login.php');
//print_r($_COOKIE);
require('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="todo.css">
    <link rel="stylesheet" href="recursos/index.css">
    <title>Home</title>
</head>
<body>
    <h1>PharmaDam</h1> 
    <div class="margen">
        
        <section class="margenTablas">
            <form method="post">
            <input type="submit" style="background-image: url(recursos/tablaDestino.jpg)" alt="submit" id="juan" name="juan">
            <input type="submit" style="background-image: url(recursos/tablaSus.jpg)" alt="submit" id="juan" name="juan">
            </form>
        </section>
        
    </div>
    <div>
     
    <?php
    if(isset($_POST['juan'])){

    
   //<img src="recursos/tablaDestino.jpg" alt="">
            //<img src="recursos/tablaSus.jpg" alt="">
            //<img src="recursos/tablaCamionero.png" alt="">
                $stmt = $conn->prepare("SELECT * FROM conductor");
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //var_dump($result);
                //echo '<a href="newGolfer.php"><h1>CREAR GOLFISTA</h1></a></br></br>';
                echo '<table class="table table-striped">';
                echo '<tr><th>id</th><th>nombre</th><th>apellidos</th><th>dni</th><th>matricula</th><th>telefono</th><th>email</th><th>nacionalidad</th></tr>';
                foreach ($result as $row) {
                    echo "<tr><td>".$row["id_conductor"] ."</td>"
                    ."<td>" .$row["nombre"] . "</td>"
                    ."<td>" .$row["apellidos"] . "</td>"
                    ."<td>" .$row["dni"] . "</td>"
                    ."<td>" .$row["matricula"] . "</td>"
                    ."<td>" .$row["telefono"] . "</td>"
                    ."<td>" .$row["email"] . "</td>"
                    ."<td>" .$row["nacionalidad"] . "</td></tr>";
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

    </div>
</body>
</html>