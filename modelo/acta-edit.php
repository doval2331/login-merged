<?php
include 'conexion.php';


$id = $_SESSION['id-e'];
$asunto = $_SESSION['asunto-e'];
$fecha = $_SESSION['fecha-e'];
$descripcion = $_SESSION['descripcion-e'];
$responsable = $_SESSION['responsable-e'];
$programa = $_SESSION['programa-e'];

echo $sentencia = "UPDATE acta SET id='" . $id . "', asunto='" . $asunto . "', fecha='" . $fecha . "', 
		descripcion='" . $descripcion . "', responsable='" . $responsable . "',
        id_programa='" . $programa . "' WHERE id='" . $id . "'";
$conexion->query($sentencia) or die("Error al actualizar datos" . mysqli_error($conexion));

?>

<script type="text/javascript">
  alert("Datos Actualizados Exitosamante!!");
  window.location.href = '../vista/index_crud.php';
</script>