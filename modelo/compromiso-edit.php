<?php
include 'conexion.php';


$id = $_SESSION['id-e'];
$descripcion = $_SESSION['descripcion-e'];
$fecha_ini = $_SESSION['fecha_ini-e'];
$fecha_fin = $_SESSION['fecha_fin-e'];
$responsable = $_SESSION['responsable-e'];

echo $sentencia = "UPDATE compromiso SET id='" . $id . "', descripcion='" . $descripcion . "', fecha_ini='" . $fecha_ini .
 "', fecha_fin='" . $fecha_fin . "', responsable='" . $responsable . "' WHERE id='" . $id . "'";
$conexion->query($sentencia) or die("Error al actualizar datos" . mysqli_error($conexion));

?>

<script type="text/javascript">
  alert("Datos Actualizados Exitosamante!!");
  window.location.href = '../vista/index_crud.php';
</script>