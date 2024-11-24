<?php
session_start();
include "./conexion.php";
//procesar el fromulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT COUNT(*) as contar from Usuarios where nom_usuario= '$usuario' and contraseña = '$password'";
    $consulta = mysqli_query($conexion,$q);

    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
    
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$usuario;
    $_SESSION['autenticado'] = true;
    

        header("location: ../inicio.php");
    }else{

        header("location: ../loginAdmin.php");
    }
}
?>