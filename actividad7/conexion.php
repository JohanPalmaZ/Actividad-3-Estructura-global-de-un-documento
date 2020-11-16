<?php

    $ruta       ="localhost";
    $login      ="root";
    $password   ="123456";
    $bd         ="agencia";
    $conexion   =mysqli_connect($ruta, $login, $password, $bd);
if($conexion){
    echo "Conectado";
} else{
    echo "Desconectado";
}
return $conexion;

?>