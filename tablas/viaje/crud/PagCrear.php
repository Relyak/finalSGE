<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir viaje</title>
</head>
<body> 
    <form action="crear.php" method="post">
        Id pedido<input type="text" name="id_pedido" id="id_pedido"><br>
        Id origen<input type="text" name="id_origen" id="id_origen" ><br>
        Id destino<input type="text" name="id_destino" id="id_destino"><br>
        Id fecha<input type="text" size="100" name="id_fecha" id="id_fecha"><br>
        Id conductor<input type="text" size="100" name="id_conductor" id="id_conductor"><br>
        <input type="submit" value="Insertar">
    </form>
    <a href="../../../home.php">Volver sin modificar</a>
</body>
</html>