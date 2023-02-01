<?php include_once('./app/vistas/inc/header.tpl.php'); ?>
<h1>Listado de pokemons</h1>
<table>
    <thead>
        <th>Foto</th>    
        <th>Nombre</th>
        <th>Tipo</th>
        <th></th>
    </thead>
    <tbody>
        <?php 
            if((isset($params['source'])&&($params['source']=='api'))){
                $id = 1;    
                foreach($datos['results'] as $pokemon): ?> 
                        <tr>
                            <td><img width="96" height="96" src="<?php echo "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/".$id.".png"; ?>"></td>
                            <td><a href="./?controlador=pokemon&metodo=ver&id=<?php echo $id; ?>&source=api"><?php echo $pokemon['name']; ?></a></td>
                            <td><?php echo $datos[0][$id-1]; ?></td>
                            <!-- <td><a href="?controlador=pokemon&metodo=eliminar&id=<?php// echo $datos_pokemon['id_pokemon']; ?>">Eliminar</a></td> -->
                        </tr>
                    <?php
                        $id++;
                    endforeach;
                    ?>
                    </tbody>
                    <p><a href=".">Listar de API Local</a></p>
                <?php
                }else{
                    foreach($datos as $pokemon => $datos_pokemon): ?> 
                        <tr>
                            <td><img width="96" height="96" src="<?php echo $datos_pokemon['url_imagen']; ?>" ></td>
                            <td><a href="./?controlador=pokemon&metodo=ver&id=<?php echo $datos_pokemon['id_pokemon']; ?>"><?php echo ucwords($datos_pokemon['nombre']); ?></a></td>
                            <td><?php echo ucwords($datos_pokemon['tipo']); ?></td>
                            <td><a href="?controlador=pokemon&metodo=eliminar&id=<?php echo $datos_pokemon['id_pokemon']; ?>">Eliminar</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <p><a href="./?controlador=pokemon&metodo=listar&source=api">Listar de PokeAPI (Pokedex nacional)</a></p>
            <?php } ?>            
<p><a href="./?controlador=pokemon&metodo=addPokemon">Añadir pokemon</a></p>
<?php include_once('./app/vistas/inc/footer.tpl.php'); ?>