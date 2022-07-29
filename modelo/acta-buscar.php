<?php

$consulta = buscarActa($_GET['id']);

function buscarActa($id)
{
  include '../modelo/conexion.php';
  $sentencia = "SELECT * FROM acta WHERE id='" . $id . "' ";
  $resultado = $conexion->query($sentencia) or die("Error al consultar acta" . mysqli_error($conexion));
  $fila = $resultado->fetch_assoc();

  return [
    $fila['asunto'],
    $fila['fecha'],
    $fila['descripcion'],
    $fila['responsable'],
    $fila['id_programa'],
  ];
}

?>