<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();



if((isset($_SESSION['login']) && ($_SESSION['login']))){
    header("Location: ./tienda.php");
    $conexion->close;
    exit();
}else{
    $error = false;
    if((isset($_POST['enviar']) && isset($_POST['user']) && (isset($_POST['psswd'])) && (!empty($_POST['user'])) && (!empty($_POST['psswd'])))){
      try{
        $usuario = $_POST['user'];
        $contraseña = $_POST['psswd'];
        $conexion = new mysqli('localhost', 'root', '', 'ejtienda');
        $result = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contraseña'");
        $usuario = $result->fetch_array();
        if($usuario!=null){
            if($_POST['user'] == $usuario['usuario'] && $_POST['psswd'] == $usuario['contrasena']){
                $_SESSION['login'] = true;
                header("Location: ./tienda.php");
                exit();
            }    
        }else{
            $error_message = "Usuario o contraseña incorrectos";
            $error = true;
        }
    }catch(Exception $e){
        $error_message =  "Se ha producido un error: ";
        $error_message .= $e->getMessage();
        $error = true;
    }
  }else if((isset($_POST['enviar']) && isset($_POST['user']) && (isset($_POST['psswd'])) && ((empty($_POST['user'])) || (empty($_POST['psswd']))))){
    $error_message =  "No se ha introducido un usuario o una contraseña";
    $error = true;
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <form method="post">
            <p>Usuario: <input name="user"></input></p>
            <p>Contraseña: <input name="psswd"></input></p>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>
<?php

if($error){
    echo $error_message;
    $error = false;
}

}
?>