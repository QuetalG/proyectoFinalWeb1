<?php 
include "./logica/controller.php";
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    // Redirigir al inicio de sesión si no está autenticado
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablas.css">    
    <link rel="shortcut icon" href="./favicon/faviconBitcake.png" type="image/x-icon">
    <title>Bitcake</title>
</head>
<body>
    <header>
        <a href="./logica/cerrarSesion.php" class="salir">🚪🚶Cerrar Sesion</a>
         
    </header>

<section id="inventario" class="content-section">
            <h2>Inventario Panaderia "Bitcake"</h2>

<?php    
require "./logica/conexion.php"; 
$consulta_sql = "SELECT producto_id,nombre_producto, disponible, fecha_ultima_actualizacion
 FROM Inventario";  
$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);
/*    
$query = "SELECT nombre_producto, disponible, fecha_ultima_actualizacion
 FROM Inventario LIMIT 10";
$stmt = $pdo->prepare($query);
$stmt->execute();*/
if ($count > 0) {
    echo '<table>';
            echo '<tr><th>ID</th><th>Producto</th><th>Disponible</th><th>Última Actualización</th></tr>';
            while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['producto_id'] . "</td>";
            echo "<td>" . $row['nombre_producto'] . "</td>";
            echo "<td>" . ($row['disponible'] ? 'Sí' : 'No') . "</td>";
            echo "<td>" . $row['fecha_ultima_actualizacion'] . "</td>";
            echo "</tr>";
            }
            echo '</table>';
}

         

?>
<a href="registro.php" class="link">Editar inventario</a>

</section>
</body>
</html>





