<?php 


$servidor="localhost";
$usuario="root";
$pasword="";
$base_datos="appchat2";
$conexion = new mysqli($servidor, $usuario, $pasword, $base_datos);

function formatearFecha($fecha){
return date('g:i a', strtotime($fecha));

}

 ?>