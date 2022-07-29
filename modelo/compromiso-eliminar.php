<?php
include 'conexion.php';

$id = $_GET['id'];

$sentencia = "DELETE FROM compromiso WHERE id ='" . $id . "' ";
$conexion->query($sentencia) or die("Error al eliminar" . mysqli_error($conexion));

?>

<script type="text/javascript">
  alert("Compromiso Eliminado!!");
  window.location.href = '../vista/index_crud.php';
</script>