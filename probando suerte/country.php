<?php
    $conexion = new mysqli('localhost', 'root', '1234', 'world');
    $error = $conexion->connect_errno;

    if($error!=0){
        echo "La base de datos ha dado tremendo petazo";
    }else{

    }
?>

<html>
    <head>
        <title>World</title>
    </head>
    <body>
        <p><input type="button"> <input type="button"> <input type="button"></p>
        <br/>
        
        <?php
        
        $registros = $conexion->query("SELECT * FROM country");

        while($registro = $registros->fetch_array()){
        
        }
        ?>

    </body>
</html>