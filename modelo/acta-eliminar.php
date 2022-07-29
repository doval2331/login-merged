<?php
include 'conexion.php';

$id = $_GET['id'];

$sentencia = "DELETE FROM acta WHERE id ='" . $id . "' ";
$conexion->query($sentencia) or die("Error al eliminar" . mysqli_error($conexion));

?>

<script type="text/javascript">
  alert("Acta Eliminada!!");
  window.location.href = '../vista/index_crud.php';
</script>