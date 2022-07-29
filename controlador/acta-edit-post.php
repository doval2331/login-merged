<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['editar-acta'])) {

  $_SESSION['id-e'] = $_POST['id'];
  $_SESSION['asunto-e'] = $_POST['asunto'];
  $_SESSION['fecha-e'] = $_POST['fecha'];
  $_SESSION['descripcion-e'] = $_POST['descripcion'];
  $_SESSION['responsable-e'] = $_POST['responsable'];
  $_SESSION['programa-e'] = $_POST['programa'];
}

include '../modelo/acta-edit.php';

?>