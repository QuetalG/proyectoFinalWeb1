<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Panadería</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="./favicon/faviconBitcake.png" type="image/x-icon">
</head>
<body>
    <div class="login-container">
        <h1 class="logo">🍞 BitCake</h1>
        <h2>Iniciar Sesión</h2>
        <form action="./logica/controller.php" method="post" class="login-form">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
            
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            
            <button type="submit" class="login-button">Ingresar</button>
        </form>
    </div>
</body>
</html>