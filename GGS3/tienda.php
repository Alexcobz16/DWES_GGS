<?php 
/**
 * base de datos productos_comerciales
 * css de la tienda
 * login login.php
 */
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

    if(!isset($_SESSION['login'])||empty($_SESSION['login'])){
        header("Location: ./login.php");
    }else{

        if(!isset($_SESSION['cesta'])){
            $_SESSION['cesta'] = array(
                'productos' => array()
            );
        }
    

    //botones de la cesta
    if(isset($_POST['añadir'])){
        $codigo = array_keys($_POST['añadir']);
        $select = $conexion->query('SELECT cod, nombre_corto, PVP FROM producto WHERE `cod` = ' . "'$codigo[0]'");
        $resultado = $select->fetch_all();
        if((count($_SESSION['cesta']['productos']) == 0)){
            array_push($_SESSION['cesta']['productos'], array($resultado[0][0]=>array('nombre' => $resultado[0][1], 'precio' => $resultado[0][2], 'cantidad' => 1)));
        }else{
            $posicion = '';
            $existe = true;
            for($i=0;$i<count($_SESSION['cesta']['productos']);$i++){
                if(isset($_SESSION['cesta']['productos'][$i][$codigo[0]])){
                    $posicion = $i;
                    $existe = true;
                    break;
                }else{
                    $existe = false;
                }
            }
            if($existe){
                $_SESSION['cesta']['productos'][$posicion][$codigo[0]]['cantidad']++;
            }else{
                array_push($_SESSION['cesta']['productos'], array($resultado[0][0]=>array('nombre' => $resultado[0][1], 'precio' => $resultado[0][2], 'cantidad' => 1)));
            }
        }
        print_r($_SESSION['cesta']['productos']);
    }else if(isset($_POST['comprar'])){
        header("Location: ./cesta.php");
    }else if(isset($_POST['vaciar'])){
        $_SESSION['cesta'] = array(
            'productos' => array()
        );
    }else if(isset($_POST['logoff'])){
        header("Location: ./logout.php");
    }

    


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
    <form id='vaciar' method='post'>
        <input type='submit' name='vaciar' value='Eliminar Cesta'/>
    </form>
    <form id='comprar' action='cesta.php' method='post'>
        <input type='submit' name='comprar' value='Comprar'/>
    </form>
  </div>
  <div id="productos">
  <form method="post">
  <table>
        <tr>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Precio</td>
        </tr>
    <?php
        $select = $conexion->query("SELECT cod, nombre_corto, descripcion, PVP FROM producto");
        while($producto = $select->fetch_array()){
    ?>
    <tr>
        <td><?php echo $producto['nombre_corto'];?></td>
        <td><?php echo $producto['descripcion'];?></td>
        <td><?php echo $producto['PVP'];?></td>
        <td><input type="submit" name="añadir[<?php echo $producto['cod'];?>]" value="+"></td>
    </tr>
    </form>
    <?php
        }
    ?>
    </table>

  </div>
  <br class="divisor"/>
  <div id="pie">
    <form method='post'>
        <input type='submit' name='logoff' value='Cerrar Sesión'/>
    </form>        
    </div>
</div>
</body>
</html>
<?php } ?>