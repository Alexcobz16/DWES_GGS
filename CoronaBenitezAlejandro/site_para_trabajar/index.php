<?php
  session_start();
  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  require_once('./productos.php');
  require_once('./funciones.php');

  //Aquí puedes inicializar, si procede, la variable de sesión de la cesta
  //La estructura de la cesta puede ser simplemente un array cuyas claves se correspondan a los identificadores de los productos y cuyo valor sea el número de unidades de ese producto en la cesta
  //Puedes sacar el resto de la información cruzando la información de la cesta con el array producto 
  

  //Aquí puedes gestionar los post. Hay varias funcionalidades en la página (dos formularios): incluir en cesta, subir un determinado producto en una unidad y bajar un determinado producto de la cesta en una unidad. La manera de sacar los productos de la cesta es poner a 0 el número de unidades que hay en la cesta
  
  if(!isset($_SESSION['cesta'])){
    $_SESSION['cesta'] = array(
      'productos' => array(
  
      )
    );  
  }

  if(isset($_POST['add'])){
    $nombre = array_keys($_POST['add']);
    if(count($_SESSION['cesta']['productos'])==0){
      foreach($productos as $producto){
        if($producto['nombre'] == $nombre[0]){
          array_push($_SESSION['cesta']['productos'], array($nombre[0] => array('precio' => $producto['precio'], 'cantidad' => 1, 'nombre' => $nombre[0], 'img_miniatura' => $producto['img_miniatura'])));
        }
      }
    }else{
      $posicion = 0;
      $existe = false;
      for($i=0;$i<count($_SESSION['cesta']['productos']);$i++){
        $articulos = array_keys($_SESSION['cesta']['productos'][$i]);
        foreach($articulos as $articulo){
          if($articulo == $nombre[0]){
            $existe = true;
            $posicion = $i;
            break;
          }
        }
      }
      if($existe){
        $_SESSION['cesta']['productos'][$posicion][$nombre[0]]['cantidad']++;
      }else{
        foreach($productos as $producto){
          if($producto['nombre'] == $nombre[0]){
            array_push($_SESSION['cesta']['productos'], array($nombre[0] => array('precio' => $producto['precio'], 'cantidad' => 1, 'nombre' => $nombre[0], 'img_miniatura' => $producto['img_miniatura'])));
          }
        }
      }
    }
  }
  
  $the_basket = getBasketMarkup();
  $the_products = getProductosMarkup($productos);
  include('./home.tpl.php'); 
?>
