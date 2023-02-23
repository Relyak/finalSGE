<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir conductor</title>
</head>
<body> 
    <div class="contenedorPadre">
        <div class="contenedorAñadir" >
            <form action="crear.php" method="post">
                <label>Nombre<br><input type="text" name="nombre" id="nombre"><br></label>
                <label>Apellidos<br><input type="text" name="apellidos" id="apellidos" ><br></label>
                <label>Dni<br><input type="text" name="dni" id="dni"><br></label>
                <label>Matrícula<br><input type="text" name="matricula" id="matricula" ><br></label>
                <label>Teléfono<br><input type="text" size="100" name="telefono" id="telefono"><br></label>
                <label>Email<br><input type="text" size="100" name="email" id="email"><br></label>
                <label>Nacionalidad<br><input type="text" size="100" name="nacionalidad" id="nacionalidad"><br></label>
                <input type="submit" value="Insertar">
            </form>
        </div>
        <div class="contenedorVolver">
            <a href="../../../home.php">Volver sin modificar</a>
        </div>
    </div>
</body>
</html>