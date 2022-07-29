
<?php
include "../modelo/conexion.php";
$sentecia = "SELECT * FROM acta";
$resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));

while ($fila = $resultado->fetch_assoc()) {
  echo "<tr>";
    echo "<td class='fw-bold'>"; echo $fila['id']; echo "</td>";
    echo "<td>"; echo $fila['asunto']; echo "</td>";
    echo "<td><a href='compromiso-add-vista.php?id=".$fila['id']."'>Ver Datos... Agregar Compromiso</a></td>";
  echo "</tr>";
}


?>
            