<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['add-compromiso'])) {

  $_SESSION['descripcion'] = $_POST['descripcion'];
  $_SESSION['fecha_ini'] = $_POST['fecha_ini'];
  $_SESSION['fecha_fin'] = $_POST['fecha_fin'];
  $_SESSION['responsable'] = $_POST['responsable'];
  $_SESSION['id_acta'] = $_POST['id_acta'];
}

include '../modelo/compromiso-add.php';

?>