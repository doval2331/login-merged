
<?php
include "../modelo/conexion.php";
$sentecia = "SELECT * FROM compromiso";
$resultado = $conexion->query($sentecia) or die(mysqli_error($conexion));

while ($fila = $resultado->fetch_assoc()) {
  echo "<tr>";
    echo "<td class='fw-bold'>"; echo $fila['id']; echo "</td>";
    echo "<td>"; echo $fila['descripcion']; echo "</td>";
    echo "<td>"; echo $fila['fecha_ini']; echo "</td>";
    echo "<td>"; echo $fila['fecha_fin']; echo "</td>";
    echo "<td>"; echo $fila['responsable']; echo "</td>";
    echo "<td>"; echo $fila['id_acta']; echo "</td>";
    echo "<td><a href='compromiso-editar-vista.php?id=".$fila['id']."'> <button type='button' class='btn btn-success btn-sm'>Modificar</button> </a>";
    echo " <a href='../modelo/compromiso-eliminar.php?id=".$fila['id']."'> <button type='button' class='btn btn-danger btn-sm'>Eliminar</button> </a></td>";
  echo "</tr>";
}


?>
            