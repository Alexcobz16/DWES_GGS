<html>
    <head>
        <title>GGS</title>
    </head>
    <body>
        <form method="post">
            <p>Nombre: <input for="nombre" name="nombre"></p>
            <p>Modulo: </p>
            <p><input type="radio" value="Desarrollo Web en Entorno Servidor" name="modulo">Desarrollo Web en Entorno Servidor</p>
            <p><input type="radio" value="Desarrollo Web en Entorno Cliente" name="modulo">Desarrollo Web en Entorno Cliente</p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

    <?php 
    
    if( (!empty($_REQUEST["nombre"])) and (!empty($_REQUEST["modulo"])) ){
        echo "El nombre es ", $_REQUEST["nombre"]," y está en el módulo ", $_REQUEST["modulo"];
    }

    ?>

