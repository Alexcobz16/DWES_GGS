<?php
//boton acceder a admin_employees.php renicia la base de datos

//admin_employees.php
$conexion = new mysqli('localhost','root','1234','employees');
$errores = $conexion->connect_errno;

if($errores != 0){
    echo "ofu currele aqui hay petazo";
}else{
    if(isset($_POST['restaurar'])){
    }
}


//base de datos fotos de empleados tabla imagenes empleados misempleados.sql (ID, nombre, careto) BLOB clientes.php if(not url) lista clientes para foto

?>