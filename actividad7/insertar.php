<?php
print_r($_POST);
require_once('conexion.php');
date_default_timezone_set('America/Mexico_City');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$fecha = date ('d-m-y');
$sql = "INSERT INTO mensajes(nombre, email, mensaje, fecha) VALUES ('$nombre', '$email', '$mensaje', '$fecha')";
$resultado=mysqli_query($conexion, $sql) or die (mysqli_error($conexion));
echo"<scrpt>
        alert('El mensaje se envio exitoxamente');
        windows.location='contacto.php';
    </script>";

?>