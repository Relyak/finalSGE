<?php
require('../../../check_login.php');
require('../../../db.php');
$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM destino WHERE id=:id");
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
    <title>Editar destino</title>
</head>
<body> 
    <form action="editar.php" method="post">
        Cif<input type="text" name="cif" id="cif" value='<?php echo$result["cif"] ?>'><br>
        Nombre<input type="text" name="nombre" id="nombre" value='<?php echo$result["nombre"] ?>'><br>
        Dirección<input type="text" name="direccion" id="direccion" value='<?php echo$result["direccion"] ?>'><br>
        <input type="hidden" name="id" value='<?php echo $id ?>'>
        <input type="submit" value="Editar">
    </form>
    <a href="../../../home.php">Volver sin modificar</a>
</body>
</html>
