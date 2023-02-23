<?php
require('../../../check_login.php');
require('../../../db.php');
$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM origen WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar origen</title>
</head>
<body> 
    <form action="editar.php" method="post">
        Nombre<input type="text" name="nombre" id="nombre" value='<?php echo$result["nombre"] ?>'><br>
        Ciudad<input type="text" name="ciudad" id="ciudad" value='<?php echo$result["ciudad"] ?>'><br>
        CP<input type="text" name="cp" id="cp" value='<?php echo$result["cp"] ?>'><br>
        Teléfono<input type="text" size="100" name="telefono" id="telefono" value='<?php echo$result["telefono"] ?>'><br>
        Dirección<input type="text" size="100" name="direccion" id="direccion" value='<?php echo$result["direccion"] ?>'><br>
        <input type="hidden" name="id" value='<?php echo $id ?>'>
        <input type="submit" value="Editar">
    </form>
    <a href="../../../home.php">Volver sin modificar</a>
</body>
</html>
