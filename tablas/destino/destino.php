<?php
    
    if (isset($_POST['destino'])) {
    $stmt = $conn->prepare("SELECT * FROM destino");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<h3>Destino</h3>';
    echo '<table width="100px" id="tabla" class="table table-striped">';
    echo '<tr>
              <th>Id</th>
              <th>CIF</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th></th>
              <th><a href=tablas/destino/crud/PagCrear.php>Añadir</a></th>
         </tr>';
    echo '<tr>
              <td colspan="100"><input style="width:100%;" type="text" id="buscar" placeholder="Escriba para buscar"/></td>
         </tr>';
    foreach ($result as $row) {
        echo "<tr>
                  <td>" . $row["id"] . "</td>"
                ."<td>" . $row["cif"] . "</td>" 
                ."<td>" . $row["nombre"] . "</td>"
                ."<td>" . $row["direccion"] . "</td>"
                ."<td>" . "<a href='tablas/destino/crud/PagEditar.php?id=".$row["id"]."'>Editar</a>" . "</td>"
                ."<td>" . "<a href='tablas/destino/crud/borrarDestino.php?id=".$row["id"]."'>Borrar</a>" . "</td>
             </tr>";
        
    }

    echo '</table>';

    //Utiliza el código Javascript para crear la barra filtradora
    echo '<script type="text/javascript" src="TablaBuscador/TablaBuscador.js"></script>';
    
}
?>