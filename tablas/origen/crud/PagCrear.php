<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir conductor</title>
</head>
<body> 
    <form action="crear.php" method="post">
        Nombre<input type="text" name="nombre" id="nombre"><br>
        Ciudad<input type="text" name="ciudad" id="ciudad" ><br>
        CP<input type="text" name="cp" id="cp"><br>
        Teléfono<input type="text" size="100" name="telefono" id="telefono"><br>
        Dirección<input type="text" size="100" name="direccion" id="direccion"><br>
        <input type="submit" value="Insertar">
    </form>
    <a href="../../../home.php">Volver sin modificar</a>
</body>
</html>