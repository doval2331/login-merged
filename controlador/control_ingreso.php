<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION['user'] = $_POST['username'];
$_SESSION['pass'] = $_POST['password'];

include '../modelo/validar_usuario.php';

?>