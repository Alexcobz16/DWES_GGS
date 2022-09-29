<html>
    <head>
        <title>GGS</title>
    </head>
    <body>
        <form method="post">
            <p>Nombre: <input for="nombre" name="nombre"></p>
            <p>Modulo: </p>
            <p><input type="checkbox" value="Desarrollo Web en Entorno Servidor" name="modulo[]">Desarrollo Web en Entorno Servidor</p>
            <p><input type="checkbox" value="Desarrollo Web en Entorno Cliente" name="modulo[]">Desarrollo Web en Entorno Cliente</p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

    <?php
    static $checkpoint = 0;

    if($checkpoint == 0){
        $checkpoint = 1;
    }else{
        if((empty($_REQUEST["nombre"]))){
            echo "No se ha especificado un nombre";
        }else{
            echo "Nombre: ", $_REQUEST["nombre"];
        }
    }

        




    
    ?>

    <br/>

    <?php

    $modulos = array("Desarrollo Web en Entorno Servidor", "Desarrollo Web en Entorno Cliente");

    foreach ($modulo as $modulos) {
        if(!empty($nombre)){
            echo "Modulo: ", $modulo;
        }
    }




?>