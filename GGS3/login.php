<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_COOKIE['sesion']) || isset($_SESSION) || (isset($_POST['enviar']) && isset($_POST['user']) && (isset($_POST['psswd'])))){

}else{

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form>
            <p>Usuario: <input name="user"></input></p>
            <p>Contraseña: <input name="psswd"></input></p>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>
<?php } ?>