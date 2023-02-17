<?php 
include_once('./app/vistas/inc/header.tpl.php'); 
    if((isset($params['source'])&&($params['source']=='api'))){
        //print_r($datos);
        echo $datos['id'];
?>
            <h1>Detalles del pokemon <?php echo $datos['name']; ?></h1>
            <h2>El pokemon es de tipo <?php echo $datos['types'][0]['type']['name']; ?></h2>
            <td><img src="<?php echo "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".$id.".png"; ?>"></td>
            <br/>
            <td><a href=".?controlador=pokemon&metodo=importar&id=<?php echo $datos['id']; ?>&nombre=<?php echo $datos['name']; ?>&tipo=<?php echo $datos['types'][0]['type']['name']; ?>&url=<?php echo "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".$id.".png"; ?>">Importar a la API Local</a></td>
            <p><a href="./?controlador=pokemon&metodo=listar&source=api">Volver</a></p>

    <?php }else{
    ?>
            <h1>Detalles del pokemon <?php echo $datos['nombre']; ?></h1>
            <h2>El pokemon es de tipo <?php echo $datos['tipo']; ?></h2>
            <p><img src="<?php echo $datos['url_imagen']; ?>" > <?php echo $datos['descripcion']; ?></p>
            <p><a href="./">Volver</a></p>
            <p><a href="./?controlador=pokemon&metodo=update&id=<?php echo $datos['id_pokemon'] ?>">Actualizar datos de <?php echo $datos['nombre']; ?></a></p>
<?php 
}
include_once('./app/vistas/inc/footer.tpl.php'); 
?>