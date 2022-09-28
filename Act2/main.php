<html>
    <head>
        <title>GGS</title>
    </head>
    <body>
        <form method="post">
            <p>Nombre: <input for="nombre" name="nombre"></p>
            <p>Modulo: </p>
            <p><input type="checkbox" value="Desarrollo Web en Entorno Servidor" name="modulo"[]>Desarrollo Web en Entorno Servidor</p>
            <p><input type="checkbox" value="Desarrollo Web en Entorno Cliente" name="modulo"[]>Desarrollo Web en Entorno Cliente</p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

    <?php

    if((!empty($_REQUEST["nombre"]))){
        echo "Nombre: ", $_REQUEST["nombre"];
    }
    
    ?>

    <br/>

    <?php

    if( !empty($_REQUEST[array("modulo")]) ){

        $modulos[] = $_REQUEST[array("modulo")];

       foreach ($modulos as $nombre) {
        echo "Modulo: ", $nombre;
    }
     
    }

?>