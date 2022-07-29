<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['add-acta'])) {

  $_SESSION['asunto'] = $_POST['asunto'];
  $_SESSION['fecha'] = $_POST['fecha'];
  $_SESSION['descripcion'] = $_POST['descripcion'];
  $_SESSION['responsable'] = $_POST['responsable'];
  $_SESSION['id_programa'] = $_POST['id_programa'];
}

include '../modelo/acta-add.php';

?>