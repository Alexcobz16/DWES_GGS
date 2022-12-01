<?php
  function inicializa_productos(&$productos, $num_productos){
    
    $connection = @ new mysqli('localhost', 'root', '', 'ejtienda');
    $error = $connection->connect_errno;

    if ($error != null) {
      echo "<p>Error $error conectando a la base de datos: $connection->connect_error</p>";
      exit();
    }
    $resultado = $connection->query('SELECT * FROM producto LIMIT '.$num_productos);
    echo '<pre>'.print_r($resultado).'</pre>';
    //TODO: COMPROBAR QU NO HA HABIDO ERRORES
    $resultado = $resultado->fetch_all();
    $i=1;
    foreach($resultado as $producto){
      $productos[$i] = array(
        'info_prod' => array(
          'cod_prudcto'=>$producto[0],
          'nombre_corto' => $producto[2],
          'precio' => $producto[4],
        ),
        'cantidad' => 0,
      );
      $i++;
    }
  }
  function imprime_formulario($formulario){
    $output = '';
    $output.='<h2>'.$formulario['productos'][$formulario['paso_actual']]['info_prod']['nombre_corto'].'</h2>';

    if($formulario['paso_actual']==1){
      $output.='<form method="post" action="./formulario.php">
      <input type="submit" name="siguiente" value="Siguiente">
    </form>';
    }else if($formulario['paso_actual']==4){
      $output.='<form method="post" action="./formulario.php">
      <input type="submit" name="anterior" value="Anterior">
      <input type="submit" name="cesta" value="Finalizar">
    </form>';

    }else{
      $output.='<form method="post" action="./formulario.php">
      <input type="submit" name="anterior" value="Anterior">
      <input type="submit" name="siguiente" value="Siguiente">
    </form>';
    }

    echo $output;
  }
  

?>