<?php
include 'conexion.php';


$asunto = $_SESSION['asunto'];
$fecha = $_SESSION['fecha'];
$descripcion = $_SESSION['descripcion'];
$responsable = $_SESSION['responsable'];
$programa = $_SESSION['id_programa'];

$sentencia = "INSERT INTO acta (asunto, fecha, descripcion, responsable, id_programa) 
		VALUES ('" . $asunto . "', '" . $fecha . "','" . $descripcion . "', '" . $responsable . "','" . $programa . "') ";
$conexion->query($sentencia) or die("Error al ingresar los datos" . mysqli_error($conexion));

?>

<script type="text/javascript">
  alert("Acta Registrada Exitosamante!!");
  window.location.href = '../vista/index_crud.php';
</script>