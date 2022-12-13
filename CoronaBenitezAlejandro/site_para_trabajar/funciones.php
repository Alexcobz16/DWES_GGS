<?php

/** La siguiente función debe generar el código HTML de la cesta, y su formulario asociado
 * Ten presente los ámbitos de las variables y los modificadores que puedes utilizar para cambiarlo
 */
function getBasketMarkup(){
  //Ejemplo del HTML generado: ( no tiene por qué coincidir exactamente con el presente en la plantilla HTML )
  //Hay que incluir form
  $basket_markup = '';
/*  
 <p><strong>Número de items:</strong> 2</p>
      <p><strong>Precio total:</strong> $800</p>
      <hr>
      <div class="cItemContainer">
        <div class="cFoto"><img src="./images/product-mini-1-108x100.png"></div>
        <div class="cNombreProducto"><h3>Blueberries</h3></div>
        <input type="submit" value="-"> 1 <input type="submit" value="+">
        <strong>Precio:</strong> $550
      </div>

      <div class="cItemContainer">
        <div class="cFoto"><img src="./images/product-mini-2-108x100.png"></div>
        <div class="cNombreProducto"><h3>Avocados</h3></div>
        <input type="submit" value="-"> 1 <input type="submit" value="+">
        <strong>Precio:</strong> $250
      </div>
*/    
    return $basket_markup;
  }

/** La siguiente función debe generar el código HTML de los productos, con sus botones de 'add to cart' cesta
 * Ten presente los ámbitos de las variables y los modificadores que puedes utilizar para cambiarlo
 */
  function getProductosMarkup($productos){
   //Ejemplo del HTML generado: ( no tiene por qué coincidir exactamente con el presente en la plantilla HTML )
   //Hay que incluir form
   $productos_markup = '';

  foreach($productos as $producto){
    $productos_markup .= '<div class="cProductoContainer"><img src="<?php echo $producto["img_url"]; ?>" alt="" width="270" height="280">
        <input type="submit" value="Incluir en cesta" name="add">
        <h4><?php echo $producto["nombre"]; ?></h4>
        <p><strong>$ <?php echo $producto["precio"]; ?></strong></p>
      </div>';
    }

    /*<!-- Producto-->          
      <div class="cProductoContainer"><img src="./images/product-5-270x280.png" alt="" width="270" height="280">
        <input type="submit" value="Incluir en cesta">
        <h4>Avocados</h4>
        <p><strong>$ 28.00</strong></p>
      </div>
      <!-- Producto-->          
      <div class="cProductoContainer"><img src="./images/product-5-270x280.png" alt="" width="270" height="280">
        <input type="submit" value="Incluir en cesta">
        <h4>Corn</h4>
        <p><strong>$ 27.00</strong></p>
      </div>
      <!-- Producto-->          
      <div class="cProductoContainer"><img src="./images/product-5-270x280.png" alt="" width="270" height="280">
        <input type="submit" value="Incluir en cesta">
        <h4>Artichokes</h4>
        <p><strong>$ 23.00</strong></p>
      </div>
      <!-- Producto-->          
      <div class="cProductoContainer"><img src="./images/product-5-270x280.png" alt="" width="270" height="280">
        <input type="submit" value="Incluir en cesta">
        <h4>Broccoli</h4>
        <p><strong>$ 25.00</strong></p>
      </div>*/
    return $productos_markup;
  }