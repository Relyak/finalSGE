<?php
//require('check_login.php');
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
    <link rel="stylesheet" href="recursos/css/todo.css">
    <link rel="stylesheet" href="recursos/css/index.css">
    <title>Home</title>
</head>
<body>
    <h1>PharmaDam</h1>
    <div class="margen">
        <section class="margenTablas">
            <form method="post">
                <input type="submit" style="background-image: url(recursos/img/tablaDestino.jpg)" alt="submit" id="conductor"
                    name="conductor" value="">
                <input type="submit" style="background-image: url(recursos/img/tablaSus.jpg)" alt="submit" id="destino"
                    name="destino" value="">
                <input type="submit" style="background-image: url(recursos/img/tablaCamionero.png)" alt="submit" id="origen"
                    name="origen" value="">
                <input type="submit" style="background-image: url(recursos/img/tablaAlmacen.png)" alt="submit" id="viaje"
                    name="viaje" value="">
            </form>
        </section>
    </div>
    <div class="margenesDiv">
       <?php include('tablas/conductores/conductores.php');?>
    </div>
    <div class="margenesDiv">
       <?php include('tablas/destino/destino.php'); ?>
    </div>
    <div class="margenesDiv">
       <?php include('tablas/origen/origen.php'); ?>
    </div>
    <div class="margenesDiv">
       <?php include('tablas/viaje/viaje.php'); ?>
    </div>
</body>

</html>