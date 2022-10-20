<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli ('localhost', 'root', '', 'employees');

$error = $conexion->connect_errno;
$ultimo = '';
if($error != 0){
    echo "<p>hay errores en la conexion</p>";
    exit();
} else{
    $numeros = $conexion->query('SELECT dept_no FROM departments ORDER BY dept_no ASC');

    while($numero = $numeros->fetch_array()){
        $ultimo = $numero['dept_no'];
    }
}
?>