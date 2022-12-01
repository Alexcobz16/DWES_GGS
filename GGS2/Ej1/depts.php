<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Departamentos - operaciones CRUD</title>
    <style>
      .mainContainer{
        margin:auto;
      }
      .registrosContainer{
        border-right: solid 1px black;
        display: inline-block;
        margin: 1rem;
        padding: 0.5rem;
      }
      .updateContainer{
        margin: 1rem;
        display:inline-block;
      }
    </style>
  </head>
   
<body>

<?php
require_once ('orden.inc.php');
require('reiniciar_employees.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 $conexion = new mysqli('localhost', 'root', '', 'employees');

$error = $conexion->connect_errno;

if ($error != 0) {
?>
  <!-- Este es el HTML si hay error -->
  <p>Error de conexión a la base de datos. Texto del error: <?php echo $conexion->connect_error; ?>  Vuelve en un ratito colega.</p>;
<?php 
     exit();
}else{
  //Este código se ejecuta si la conexión a la base de datos ha ido bien.
  //1.- Recogida y gestión de datos presentes en _POST
  if(isset($_POST)&&!empty($_POST)){
    if(isset($_POST['delete'])){
      //Aquí gestionamos el eliminar
      $clave = array_keys($_POST['delete']); //Array_keys obtiene un array cuyos valores son las claves del array pasado como parámetro (y sus claves son índices 0, 1, 2...)
      $clave = $clave[0];
      
      $conexion->query("DELETE FROM departments WHERE dept_no = '$clave'");

    }else if(isset($_POST['add_button'])){
      //Aquí gestionamos añadir
      $nombre = $_POST['new_department_name'];
      $id = getPrimaryKey($conexion);
      $conexion->query("INSERT INTO departments (dept_no, dept_name) VALUES ('$id', '$nombre')");
    }else if(isset($_POST['update_button'])){
      //Aquí gestionamos el actualizar
      //Ejecuto un select para saber qué hay guardado en la base de datos
      $resultado = $conexion->query('SELECT * FROM departments');
      // counter nos servirá para saber las posiciones de array
      $counter = 0;

      // A través del mismo bucle que se usa para mostrar los departamentos voy a guardar
      // los nombres que están contenidos en la base de datos en un array llamado departamentos
      // usando como posición la variable counter que va aumentando con cada recorrido.
      while($departamento = $resultado->fetch_array()){
        $departamentos[$counter] = $departamento['dept_name'];
        $counter++;
      }

      // Creamos la sentencia SQL para actualizar
      // las ? serán las variables que añadiremos posteriormente.
      $query = 'UPDATE departments SET dept_name = ? WHERE dept_no = ?';
      $actualizacion = $conexion->prepare($query);
      // La variable nombres es un array que contendrá los campos de nombre 'name' que se
      // han actualizado mediante POST.
      $nombres = $_POST['name'];
      // Hacemos lo mismo con los array keys para saber donde se tiene que guardar el nuevo nombre.
      $codigos = array_keys($_POST['name']);
      
     foreach($nombres as $nombre){
        for($i=0;$i<count($codigos);$i++){
          if(($nombre == $nombres[$codigos[$i]]) && ($departamentos[$i] != $nombre)){
            $codigo = $codigos[$i];
            $actualizacion->bind_param("ss", $nombre, $codigo);
            $actualizacion->execute();
          }
        }
      }
    }
  }
  
  //2.- Generación e impresión del formuilario
    //Me traigo todos los registros de la tabla departamento
    
    $resultado = $conexion->query('SELECT * FROM departments');
    


?>
  <div class="mainCointainer"> 
    <h1>Departamentos</h1>
    <form method="post">
       <div class="addContainer">
         <input type="submit" value="+" name="add_button"> <input type="text" value="" placeholder="Nombre nuevo departamento" name="new_department_name"> 
       </div>
       <div class="registrosContainer">
         <?php while($departamento = $resultado->fetch_array()){?> 
           <input type="submit" value="x" name="delete[<?php echo $departamento['dept_no']; ?>]"> <input type="text" value="<?php echo $departamento['dept_name'];?>" name="name[<?php echo $departamento['dept_no']; ?>]"> <br>
         <?php } ?>
       </div>
       <div class="updateContainer">
         <input type="submit" value="Actualizar registros" name="update_button">
         <br/>
         <input type="submit" value="Reset base de datos" name="reset">
       </div>
       </form>
  </div>
  <?php 
    $conexion->close();
}
  ?>
</body>
</html>