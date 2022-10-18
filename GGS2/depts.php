<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@ $conexion = new mysqli('localhost', 'root', '', 'employees');
    $error = $conexion->connect_errno;

    if($error != 0){
        echo "<p>F bro el servidor tiene errores</p>";
        exit();
    }else{
        print $conexion->server_info;
    }
?>