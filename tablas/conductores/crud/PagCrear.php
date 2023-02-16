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
        Apellidos<input type="text" name="apellidos" id="apellidos" ><br>
        Dni<input type="text" name="dni" id="dni"><br>
        Matrícula<input type="text" name="matricula" id="matricula" ><br>
        Teléfono<input type="text" size="100" name="telefono" id="telefono"><br>
        Email<input type="text" size="100" name="email" id="email"><br>
        Nacionalidad<input type="text" size="100" name="nacionalidad" id="nacionalidad"><br>
        <input type="submit" value="Insertar">
    </form>
    <a href="../conductoresCrud.php">Volver sin crear</a>
</body>
</html>