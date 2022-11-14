<?php
/*Escribe aquí la función conectar, y todas aquellas que consideres oportunas para la realización del examen*/
function Conectar($usuario, $contraseña){
    // Se crea la conexión con los valores del archivo productos.php
    try{
        $conexion = new mysqli('localhost', $usuario, $contraseña, 'productos_comerciales');
    }catch(Exception $e){
        // En caso de que haya ocurrido un error devuelve false
        return false;
    }
    // En caso de que la conexión haya sido un éxito la devolverá a productos.php
    return $conexion;
}


function Select($conexion){
    // Se ejecuta la sentencia SELECT de la tabla productos y ya se manejarán los valores que se eligen mostrar
    return $conexion->query('SELECT * FROM Productos');
}

function Fetch($tabla){
    // Almacena en un array el valor de uno de los registros del SELECT mediante fetch_array
    return $tabla->fetch_array();
}

?>