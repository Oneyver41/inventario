<?php
$server = "localhost";
$bd = "inventario";
$usuario = "root";
$clave = "";
$conexion = "";
$conexion = new mysqli($server,$usuario,$clave,$bd);//INGRESAR LOS PARAMETROS EN EL ORDEN QUE SE CREARON($SERVER,$BD,ETC)
$error = "";
if($conexion->connect_error){
    die("conexion fallida". $conexion->connect_error);
}

?>