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
    <title>Editar Inventario</title>
    <link rel="stylesheet" href="tablas.css">
    <link rel="shortcut icon" href="./favicon/faviconBitcake.png" type="image/x-icon">
</head>
<body>
<header>
        <a href="inicio.php" class="salir"> 1️⃣Regresar a inicio</a>
         
    </header>
<section id="inventario" class="content-section">
<div class="form-section-container">
    <!-- Formulario para Nuevo Producto al Inventario -->
    <div class="form-section">
        <h2>Nuevo Producto al Inventario</h2>
        <form action="./logica/editarController.php" method="post">
            <input type="hidden" name="accion" value="agregar">
            <!-- ID del Producto -->
            <div class="form-group">
                <label for="producto_id">ID del Producto</label>
                <input type="number" id="producto_id" name="producto_id" required>
            </div>

            <!-- Nombre del Producto -->
            <div class="form-group">
                <label for="nombre_producto">Nombre del Producto</label>
                <input type="text" id="nombre_producto" name="nombre_producto" required>
            </div>

            <!-- Cantidad Disponible -->
            <div class="form-group">
                <label for="cantidad_disponible">Cantidad Disponible</label>
                <input type="number" id="cantidad_disponible" name="cantidad_disponible" step="0.01" required>
            </div>

            <!-- Unidad de Medida -->
            <div class="form-group">
                <label for="unidad_medida">Unidad de Medida</label>
                <select id="unidad_medida" name="unidad_medida" required>
                    <option value="kg">Kilogramos</option>
                    <option value="lt">Litros</option>
                    <option value="unidades">Unidades</option>
                </select>
            </div>

            <!-- Disponible -->
            <div class="form-group">
                <label for="disponible">Disponible</label>
                <select id="disponible" name="disponible" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>

            <!-- Fecha de Última Actualización -->
            <div class="form-group">
                <label for="fecha_ultima_actualizacion">Fecha de Última Actualización</label>
                <input type="date" id="fecha_ultima_actualizacion" name="fecha_ultima_actualizacion" required>
            </div>

            <button type="submit">Guardar Producto</button>
        </form>
    </div>

    <!-- Formulario para Eliminar -->
    <div class="form-section">
        <h2>Eliminar</h2>
        <form action="./logica/editarController.php" method="post">
            <input type="hidden" name="accion" value="eliminar"> 
            <div class="form-group">
                <label for="producto_id">ID del Producto</label>
                <input type="number" id="producto_id" name="producto_id" required>
            </div>
            <button type="submit">Eliminar producto</button>
        </form>
    </div>
</section>
    
</body>
</html>