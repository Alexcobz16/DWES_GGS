<?php 
try{
    $conexion = new mysqli('localhost', 'root', '', 'ejtienda');
    }catch(Exception $e){
        echo "Se ha producido un error: ";
        echo $e->getMessage();
    }

    $_SESSION['formulario'] = array(
        'productos' => array(),
        'pasoActual' => 1,
        'totalPasos' => 4
    );
    
$select = $conexion->query("SELECT cod, nombre_corto, descripcion, PVP FROM producto");

?>
<html>

</html>