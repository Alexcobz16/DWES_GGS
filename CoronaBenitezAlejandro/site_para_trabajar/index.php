<?php
  session_start();
  
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

  require_once('./productos.php');
  require_once('./funciones.php');

  //Aquí puedes inicializar, si procede, la variable de sesión de la cesta
  //La estructura de la cesta puede ser simplemente un array cuyas claves se correspondan a los identificadores de los productos y cuyo valor sea el número de unidades de ese producto en la cesta
  //Puedes sacar el resto de la información cruzando la información de la cesta con el array producto 
  

  //Aquí puedes gestionar los post. Hay varias funcionalidades en la página (dos formularios): incluir en cesta, subir un determinado producto en una unidad y bajar un determinado producto de la cesta en una unidad. La manera de sacar los productos de la cesta es poner a 0 el número de unidades que hay en la cesta
  
  $_SESSION['cesta'] = array(
    'productos' => array(

    )
  );

  if(isset($_POST['add'])){
    foreach(){
      
    }
  }
  
  $the_basket = getBasketMarkup();
  $the_products = getProductosMarkup($productos);
  include('./home.tpl.php'); 
?>
