<?php

$consulta = buscarCompromiso($_GET['id']);

function buscarCompromiso($id)
{
  include '../modelo/conexion.php';
  $sentencia = "SELECT * FROM compromiso WHERE id='" . $id . "' ";
  $resultado = $conexion->query($sentencia) or die("Error al consultar compromiso" . mysqli_error($conexion));
  $fila = $resultado->fetch_assoc();

  return [
    $fila['descripcion'],
    $fila['fecha_ini'],
    $fila['fecha_fin'],
    $fila['responsable']
  ];
}

?>