<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

try{
    $conexion = new mysqli('localhost', 'root', '', 'ejtienda');
    }catch(Exception $e){
        echo "Se ha producido un error: ";
        echo $e->getMessage();
    }


if((isset($_SESSION['login']) && ($_SESSION['login']))){
    header("Location: ./tienda.php");
    exit();
}else{


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
if((isset($_POST['enviar']) && isset($_POST['user']) && (isset($_POST['psswd'])) && (!empty($_POST['user'])) && (!empty($_POST['psswd'])))){
    $select = $conexion->query("SELECT * FROM usuarios");
    $usuario = false;
    while($usuario = $select->fetch_array()){
    if($_POST['user'] == $usuario['usuario'] && $_POST['psswd'] == $usuario['contrasena']){
        $_SESSION['login'] = true;
        $usuario = true;
        header("Location: ./tienda.php");
        break;
    }
}
    if($usuario == false){
        echo "Usuario o contraseña incorrectos";
    }
  }else if((isset($_POST['enviar']) && isset($_POST['user']) && (isset($_POST['psswd'])) && ((empty($_POST['user'])) || (empty($_POST['psswd']))))){
    echo "No se ha introducido un usuario o una contraseña";
  }
} 
?>