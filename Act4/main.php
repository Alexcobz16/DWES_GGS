<html>
     <head>
        <title>Cabina</title>
    </head>
     <body>
        <form>
            <p>Selecciona fechas y mira la diferencia de tiempo.</p>
        <input type="datetime-local" name="antes">
        <input type="datetime-local" name="despues">
        <input type="submit" value="Comprobar">
        <br/>
        </form>
     </body>
</html>

<?php
echo "<p>", $_REQUEST["antes"], "</p>";
echo $_REQUEST["despues"];

?>