<?php
//require('../../../check_login.php');
require('../../../db.php');
$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM conductor WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar conductor</title>
</head>
<body> 
    <form action="editar.php" method="post">
        NOMBRE<input type="text" name="nombre" id="nombre" value='<?php echo$result["nombre"] ?>'><br>
        Apellidos<input type="text" name="apellidos" id="apellidos" value='<?php echo$result["apellidos"] ?>'><br>
        DNI<input type="text" name="dni" id="dni" value='<?php echo$result["dni"] ?>'><br>
        Matricula<input type="text" size="100" name="matricula" id="matricula" value='<?php echo$result["matricula"] ?>'><br>
        Telefono<input type="text" size="100" name="telefono" id="telefono" value='<?php echo$result["telefono"] ?>'><br>
        Email<input type="text" size="100" name="email" id="email" value='<?php echo$result["email"] ?>'><br>
        Nacionalidad<input type="text" size="100" name="nacionalidad" id="nacionalidad" value='<?php echo$result["nacionalidad"] ?>'><br>
        <input type="hidden" name="id" value='<?php echo $id ?>'>
        <input type="submit" value="Editar">
    </form>
    <a href="../../../home.php">Volver sin modificar</a>
</body>
</html>
