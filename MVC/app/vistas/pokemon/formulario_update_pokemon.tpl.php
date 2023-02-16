<?php include_once('./app/vistas/inc/header.tpl.php'); ?>
<form method="post" action="./?controlador=pokemon&metodo=update">
    <h1>Editar <?php echo $datos['nombre']; ?></h1>
    <p><label for="poke_nombre">Nuevo nombre: </label> <input id="poke_nombre" type="text" name="poke_nombre"></p>
    <p><label for="poke_desc">Descripción actualizada: </label> <input id="poke_desc" type="text" name="poke_desc"></p>
    <p><label for="poke_img">Imagen actualizada: </label> <input id="poke_img" type="url" name="poke_img"></p>
    <input type="hidden" value="<?php echo $datos['id_pokemon']; ?>" name="id">
    <p><input type="submit" name="update" value="Enviar"></p>
</form>
<p><a href="./">Salir sin guardar</a></p>
<?php include_once('./app/vistas/inc/footer.tpl.php'); ?>