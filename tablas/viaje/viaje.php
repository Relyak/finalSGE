<?php
    //<img src="recursos/tablaDestino.jpg" alt="">
    //<img src="recursos/tablaSus.jpg" alt="">
    //<img src="recursos/tablaCamionero.png" alt="">T
    if (isset($_POST['viaje'])) {
    $stmt = $conn->prepare("SELECT * FROM viaje");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3>Viaje</h3>';
    echo '<table width="100px" id="tabla" class="table table-striped">';
    echo '<tr><th>Id</th><th>Id_pedido</th><th>Id_origen</th><th>Id_destino</th><th>Id_fecha</th><th>Id_conductor</th><th><a href=tablas/viaje/crud/PagCrear.php>Añadir</a></th></tr>';
    echo '<tr>
                <td colspan="100"><input style="width:100%;" type="text" id="buscar" placeholder="Escriba para buscar"/></td>
          </tr>';
    foreach ($result as $row) {
        echo "<tr><td>" . $row["id"] . "</td>"
            . "<td>" . $row["id_pedido"] . "</td>" 
            . "<td>" . $row["id_origen"] . "</td>" 
            . "<td>" . $row["id_destino"] . "</td>"
            . "<td>" . $row["id_fecha"] . "</td>"
            . "<td>" . $row["id_conductor"] . "</td>"
            . "<td>" . "<a href='tablas/viaje/crud/borrarViaje.php?id=".$row["id"]."'>Borrar</a>" . "</td></tr>";
    }
    echo '</table>';
    
    //Utiliza el código Javascript para crear la barra filtradora
    echo '<script type="text/javascript" src="TablaBuscador/TablaBuscador.js"></script>';

}
?>