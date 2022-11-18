<?php 
/**
 * base de datos productos_comerciales
 * css de la tienda
 * login login.php
 */

try{
    $conexion = new mysqli('localhost', 'root', '', 'ejtienda');
    }catch(Exception $e){
        echo "Se ha producido un error: ";
        echo $e->getMessage();
    }

    //botones de la cesta

?>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>PagaPoComp</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body class="pagproductos">
<div id="contenedor">
  <div id="encabezado">
    <h1>Paga "Poco"</h1>
  </div>
  <div id="cesta">
    <h3><img src="cesta.jpg" alt="Cesta" width="24" height="21"> Cesta</h3>
    <hr/>
    <form id='vaciar' action='productos.php' method='post'>
        <input type='submit' name='vaciar' value='Eliminar Cesta'/>
    </form>
    <form id='comprar' action='cesta.php' method='post'>
        <input type='submit' name='comprar' value='Comprar'/>
    </form>
  </div>
  <div id="productos">
  <table>
        <tr>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Precio</td>
        </tr>
        <form>
    <?php
        $select = $conexion->query("SELECT cod, nombre_corto, descripcion, PVP FROM producto");
        while($producto = $select->fetch_array()){
    ?>
    <tr>
        <td><?php echo $producto['nombre_corto'];?></td>
        <td><?php echo $producto['descripcion'];?></td>
        <td><?php echo $producto['PVP'];?></td>
        <td><input type="button" name="añadir[<?php echo $producto['cod'];?>]" value="+"></td>
    </tr>
    </form>
    <?php
        }
    ?>
    </table>

  </div>
  <br class="divisor"/>
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='logoff' value='Cerrar Sesión'/>
    </form>        
    </div>
</div>
</body>
</html>