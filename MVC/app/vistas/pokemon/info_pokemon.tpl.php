<?php 
include_once('./app/vistas/inc/header.tpl.php'); 
    if((isset($params['source'])&&($params['source']=='api'))){
?>
            <h1>Detalles del pokemon <?php echo $datos['name']; ?></h1>
            <h2>El pokemon es de tipo <?php echo $datos['types'][0]['type']['name']; ?></h2>
            <td><img src="<?php echo "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".$id.".png"; ?>"></td>
            <p><a href="./?controlador=pokemon&metodo=listar&source=api">Volver</a></p>

    <?php }else{
    ?>
            <h1>Detalles del pokemon <?php echo $datos['nombre']; ?></h1>
            <h2>El pokemon es de tipo <?php echo $datos['tipo']; ?></h2>
            <p><img src="<?php echo $datos['url_imagen']; ?>" > <?php echo $datos['descripcion']; ?></p>
            <p><a href="./">Volver</a></p>
<?php 
}
include_once('./app/vistas/inc/footer.tpl.php'); 
?>