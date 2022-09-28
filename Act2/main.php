<html>
    <head>
        <title>GGS</title>
    </head>
    <body>
        <form method="post">
            <p>Nombre: <input for="nombre" name="nombre"></p>
            <p>Modulo: </p>
            <p><input type="checkbox" value="Desarrollo Web en Entorno Servidor" name="modulo1">Desarrollo Web en Entorno Servidor</p>
            <p><input type="checkbox" value="Desarrollo Web en Entorno Cliente" name="modulo2">Desarrollo Web en Entorno Cliente</p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

    <?php 
    
    if( (!empty($_REQUEST["nombre"])) and (!empty($_REQUEST["modulo1"])) and (empty($_REQUEST["modulo2"])) ){
        echo "El nombre es ", $_REQUEST["nombre"], " y está en el módulo de ", $_REQUEST["modulo1"];
    }elseif ( (!empty($_REQUEST["nombre"])) and (empty($_REQUEST["modulo1"])) and (!empty($_REQUEST["modulo2"])) ) {
        echo "El nombre es ", $_REQUEST["nombre"], " y está en el módulo de ", $_REQUEST["modulo2"];
    }elseif ( (!empty($_REQUEST["nombre"])) and (!empty($_REQUEST["modulo1"])) and (!empty($_REQUEST["modulo2"])) ) {
        echo "El nombre es ", $_REQUEST["nombre"], " y está en los módulos de ", $_REQUEST["modulo1"], " y ", $_REQUEST["modulo2"];
    }

    ?>