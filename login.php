


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <h1>Sistema de Login</h1>
    <form action="login.php" method="post" class="form-register">
        <h2 class="form__titulo">INGRESAR A LA CUENTA</h2>
        <div class="contenedor-inputs">
           <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-48" >
           <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48" required>
          <input type="submit" value="Ingresar" class="btn-enviar">
          <p>¿Se ha olvidado la clave?<a href="#">Ingresa Aqui</a></p>
          <p> Si no tienes una cuenta haz click aquí<a href="index.html">Login</a></p>
          </div>
    </form>
</body>
</html>