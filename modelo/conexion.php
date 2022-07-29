<?php 

$db_host="localhost"; 
$db_usuario="root"; 
$db_password=""; 
$db_nombre="compromisos"; 
$link = mysqli_connect($db_host, $db_usuario, $db_password) or die (mysql_error()); 
$basedatos = mysqli_select_db( $link,$db_nombre) or die (mysql_error()); 

$conexion= new mysqli($db_host, $db_usuario, $db_password, $db_nombre);
//Comprobar conexion
if(mysqli_connect_errno())
{
    printf("Fallo la conexion");
}
else {
    //printf("Estas conectado");
}

?>
