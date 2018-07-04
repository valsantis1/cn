<?php
include 'cn.php';
//Recibir los datos y almacenarlos en las variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$passHash = password_hash($clave, PASSWORD_BCRYPT);
$telefono = $_POST["telefono"];
// Consulta para insertar datos
$insertar = "INSERT INTO usuarios (nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono')"; 


// Ejecutar las consultas 

$resultado = mysqli_query($conexion, $insertar);
 if (!$resultado) {
     echo 'Error al registrarse';
 } else {
     echo 'Usuario registrado correctamente';
 }

 

// Cerrar conexion 

mysqli_close ($conexion);