<?php
include "./conexion.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

     // Datos para agregar y eliminar
     $producto_id = $_POST['producto_id'];
     $nombre_producto = $_POST['nombre_producto'];
     $cantidad_disponible = $_POST['cantidad_disponible'];
     $unidad_medida = $_POST['unidad_medida'];
     $disponible = $_POST['disponible'];
     $fecha_ultima_actualizacion = $_POST['fecha_ultima_actualizacion'];



     if ($accion === 'agregar') {
        // Código para agregar producto
        $agregar = "INSERT INTO Inventario (producto_id, nombre_producto, cantidad_disponible, unidad_medida, disponible, fecha_ultima_actualizacion)
                  VALUES ($producto_id, '$nombre_producto', $cantidad_disponible, '$unidad_medida', '$disponible', '$fecha_ultima_actualizacion')";
         
         if (mysqli_query($conexion, $agregar)) {
            header("location: ../inicio.php");
         }else {
            echo "Error al agregar producto: " . mysqli_error($conexion);
        }

     }elseif ($accion === 'eliminar') {

        //codigo para eliminar 
        $eliminar = "DELETE FROM Inventario WHERE producto_id = $producto_id";

        if (mysqli_query($conexion, $eliminar)) {
            header("Location: ../inicio.php");
            exit;
        } else {
            echo "Error al eliminar producto: " . mysqli_error($conexion);
        }
     }
}

?>