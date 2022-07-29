<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['editar-compromiso'])) {

  $_SESSION['id-e'] = $_POST['id'];
  $_SESSION['descripcion-e'] = $_POST['descripcion'];
  $_SESSION['fecha_ini-e'] = $_POST['fecha_ini'];
  $_SESSION['fecha_fin-e'] = $_POST['fecha_fin'];
  $_SESSION['responsable-e'] = $_POST['responsable'];
}

include '../modelo/compromiso-edit.php';

?>