<?php
$host = '127.0.0.1';
$dbname = 'webUno';
$username = 'root';
$password = '39648';

$conexion = new mysqli($host,$username,$password,$dbname);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>