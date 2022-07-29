<?php
include 'conexion.php';


$descripcion = $_SESSION['descripcion'];
$fecha_ini = $_SESSION['fecha_ini'];
$fecha_fin = $_SESSION['fecha_fin'];
$responsable = $_SESSION['responsable'];
$id_acta = $_SESSION['id_acta'];

$sentencia = "INSERT INTO compromiso (descripcion, fecha_ini, fecha_fin, responsable, id_acta) 
		VALUES ('" . $descripcion . "', '" . $fecha_ini . "','" . $fecha_fin . "', '" . $responsable . "','" . $id_acta . "') ";
$conexion->query($sentencia) or die("Error al ingresar los datos" . mysqli_error($conexion));

?>

<script type="text/javascript">
  alert("Compromiso Registrado Exitosamante!!");
  window.location.href = '../vista/index_crud.php';
</script>