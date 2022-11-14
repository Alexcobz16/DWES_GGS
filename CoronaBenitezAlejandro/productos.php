<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Listado de productos</title>
</head>
<body>
<h1>Listado de productos</h1>    
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  require_once('./funciones.inc.php');


// Primero comprobamos si existe un intento de inicio de sesión
  if(isset($_POST['login'])){
    // Este primer caso se ejecuta si se ha introducido un usuario y una contraseña
    if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['psswd']) && !empty($_POST['psswd'])){
      // Pasamos los dos valores introducidos a la función de conectar ubicada en funciones.inc.php
      $conexion = Conectar($_POST['user'], $_POST['psswd']);
      // Este segundo caso se ejecuta sólo si tenemos introducido el usuario
    }else if(isset($_POST['user']) && !empty($_POST['user'])){
      // En este caso sólo se envía el usuario dejando la contraseña en blanco con ''
      $conexion = Conectar($_POST['user'], '');
      // Este tercer caso se da cuando sólo se indica una contraseña
    }else if(isset($_POST['psswd']) && !empty($_POST['psswd'])){
      // En este caso sólo se envía la contraseña y no crearía conexión
      $conexion = Conectar('', $_POST['psswd']);
    }else{
      // Y el último caso se da en caso de que no indiquemos nada y se dejan los valores "por defecto" que son el usuario root sin contraseña
      $conexion = Conectar('root', '');
    }
  }
// En caso de que de un error en la función devolverá false
  if($conexion == false){
    // Mensaje de error
    echo "Se ha producido un error.";
  }else{
    // En caso de que la conexión haya sido exitosa ejecutará el select de funciones.inc.php
    $tabla = Select($conexion);
?>
<!-- Imprimimos la tabla con los valores -->
<table>
  <tr>
    <!-- Empezando con los títulos de cada uno de los campos -->
    <td>Nombre</td>
    <td>Descripción</td>
    <td>Precio</td>
    <td>Descuento</td>
  </tr>
    <?php
    // Con el while se guarda cada uno de los registros de la tabla Productos
    while($registro = Fetch($tabla)){
    ?>
    <tr>
      <!-- Se imprime el valor de cada uno de los campos -->
      <td><?php echo $registro['nombre']; ?></td>
      <td><?php echo $registro['descripcion']; ?></td>
      <td><?php echo $registro['precio']; ?>€</td>
      <td><?php echo $registro['descuento']; ?>%</td>
    </tr>
    <?php
    }
    ?>
  </table>
  <!-- El botón de inicio que funciona como link -->
    <a href="./index.php"><input type="button" value="Volver a inicio"></a>
  <?php
  }

  //Aquí mostraremos la información pertinente al usuario. También, si lo consideras oportuno, mostrarás aquí la información de errores, falta de datos para realizar la conexión, etc. Para debug puedes utlizar:
  //echo '<pre>'.print_r($variable).'</pre>';
  ?>
</body>
</html>