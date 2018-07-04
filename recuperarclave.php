<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recuperar clave</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="validar.js"></script>
</head>
<body>
    <h1>Sistema de recuperación de clave</h1>
    <form action="registrar.php" method="get" class="form-register" onsubmit="return validar();">
        <h2 class="form__titulo">RECUPERAR CLAVE</h2>
        <div class="contenedor-inputs">
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-48" >
        <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" >
        <input type="submit" value="Recuperar" class="btn-enviar"> 
        
        </div>
    </form>
    </body>
    