<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION['id_usuario'];
$_SESSION['pass'] = $_POST['pass'];

include '../modelo/model_cambiar_pass.php';