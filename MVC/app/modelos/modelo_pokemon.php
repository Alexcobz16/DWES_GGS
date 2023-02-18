<?php

class ModeloPokemon{
    
    private $host = DB_HOST;
    private $usuario = DB_USER;
    private $password = DB_PASSWORD;
    private $nombre_base = DB_NAME;

    private $manejador_conexion; 
    private $manejador_query;

    public function __construct(){
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->nombre_base;
        //Explicar en qué contexto puede ser útil la conexión persistente tal y como se crea.
        $opts = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        );

        //Explicar por qué hemos decidido no utilizar aquí un bloque try-catch
        $this->manejador_conexion = new PDO($dsn,$this->usuario,$this->password,$opts);
        $this->manejador_conexion->exec('set names utf8');
    }
    /*public function getAllPokemons(){
        $resultado = $this->manejador_conexion->query('SELECT pokemons.id_pokemon, pokemons.nombre, tipos.nombre AS tipo, pokemons.url_imagen FROM pokemons INNER JOIN tipos ON pokemons.tipo = tipos.id_tipo')->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;       
    }*/
    public function getAllPokemons($params){
        if((isset($params['source'])&&($params['source']=='api'))){
            return $this->_getAllPokemonsFromAPI();
        }else{
            return $this->_getAllPokemonsFromDB();
        }
        
    }
    private function _getAllPokemonsFromAPI(){
        $ch = curl_init("https://pokeapi.co/api/v2/pokemon/?limit=493");
        //https://pokeapi.co/api/v2/pokemon/?limit=493
        //Imagen aislada https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/19.png
        //Nombre aislado $resultado['results'][18]['name']
        /**
         * Tipo
         * 
         * curl_init($resultado['results'][0]['url']);
         * curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         * $resultado = curl_exec($ch);
         * curl_close($ch);
         * $resultado = json_decode($resultado,true);
         * $resultado['types'][0]['type']['name'];
         */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/1");
        $resultado = curl_exec($ch);
        curl_close($ch);
    
        $resultado = json_decode($resultado,true);
        
        $tipos = $this->_getTiposFromAPI($resultado['results']);

        // print_r($resultado['results']);
        array_push($resultado, $tipos);
        return $resultado;
    }

    private function _getTiposFromAPI($datos){
        $tipos = array();
            for($i=1;$i<=count($datos);$i++){
                $ch = curl_init("https://pokeapi.co/api/v2/pokemon/$i");      
                curl_init($datos[$i]['url']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $resultado = curl_exec($ch);
                curl_close($ch);
                $resultado = json_decode($resultado,true);
                array_push($tipos, $resultado['types'][0]['type']['name']);
        }
        return $tipos;
    }

    private function _getAllPokemonsFromDB(){
        $resultado = $this->manejador_conexion->query('SELECT pokemons.id_pokemon, pokemons.nombre, tipos.nombre AS tipo, pokemons.url_imagen FROM pokemons INNER JOIN tipos ON pokemons.tipo = tipos.id_tipo')->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;       
    }
    public function getAllTipos(){
        $resultado = $this->manejador_conexion->query('SELECT * FROM tipos')->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function getPokemon($id){
        $resultado = $this->manejador_conexion->query('SELECT pokemons.id_pokemon, pokemons.nombre, tipos.nombre AS tipo, pokemons.url_imagen, pokemons.descripcion FROM pokemons INNER JOIN tipos ON pokemons.tipo = tipos.id_tipo WHERE pokemons.id_pokemon = \''.$id.'\'')->fetchAll(PDO::FETCH_ASSOC);
        return reset($resultado);
        
    }

    public function getPokemonFromAPI($id){
        $ch = curl_init("https://pokeapi.co/api/v2/pokemon/$id");      
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resultado = curl_exec($ch);
        curl_close($ch);
        $resultado = json_decode($resultado,true);

        return $resultado;
    }

    public function deletePokemon($id){
        return $this->manejador_conexion->query('DELETE from pokemons WHERE pokemons.id_pokemon = '.$id);
    }

    public function insertPokemon($params_pokemon){
        //return $this->manejador_conexion->query('INSERT INTO pokemons ('.$params_pokemon['poke_nombre'].', '.$param_pokemon['poke_tipo'].', '.$params_pokemon['poke_url'].', '.$params_pokemon['poke_desc']);
        $consulta = $this->manejador_conexion->prepare('INSERT INTO pokemons (nombre, tipo, url_imagen, descripcion) VALUES (:poke_nombre, :poke_tipo, :poke_img, :poke_desc)');
        return $consulta->execute(array(
            'poke_nombre' => $params_pokemon['poke_nombre'],
            'poke_tipo' => $params_pokemon['poke_tipo'],
            'poke_img' => $params_pokemon['poke_img'],
            'poke_desc' => $params_pokemon['poke_desc'],
        ));
    }

    public function importFromAPI($pokemon){
        print_r($pokemon);
        $id = $pokemon['id'];
        $nombre = $pokemon['nombre'];
        $tipo = $pokemon['tipo'];
        $imagen = $pokemon['url'];

        switch($tipo){
            case 'fire':
                $tipo = 2;
                break;
            case 'normal':
                $tipo = 4;
                break;
            case 'fighting':
                $tipo = 5;
                break;
            case 'water':
                $tipo = 6;
                break;
            case 'flying':
                $tipo = 7;
                break;
            case 'grass':
                $tipo = 3;
                break;
            case 'poison':
                $tipo = 8;
                break;
            case 'electric':
                $tipo = 1;
                break;
            case 'ground':
                $tipo = 9;
                break;
            case 'psychic':
                $tipo = 10;
                break;
            case 'rock':
                $tipo = 11;
                break;
            case 'ice':
                $tipo = 12;
                break;
            case 'bug':
                $tipo = 13;
                break;
            case 'dragon':
                $tipo = 14;
                break;
            case 'ghost':
                $tipo = 15;
                break;
            case 'dark':
                $tipo = 16;
                break;
            case 'steel':
                $tipo = 17;
                break;
            case 'fairy':
                $tipo = 18;
                break;
        }

        return $this->manejador_conexion->query("INSERT INTO `pokemons`(`id_pokemon`, `nombre`, `tipo`, `url_imagen`, `descripcion`) VALUES ('$id','$nombre','$tipo','$imagen','Importado de PokeAPI.')");
        
    }

    public function updatePokemon($params_pokemon){
        print_r($params_pokemon);
        echo "<br>";
        $id = $params_pokemon['id'];
        $nombre = $params_pokemon['poke_nombre'];
        $descripcion = $params_pokemon['poke_desc'];
        $imagen = $params_pokemon['poke_img'];
        $consulta = $this->manejador_conexion->query("UPDATE pokemons SET nombre = '$nombre', url_imagen = '$imagen', descripcion = '$descripcion'  WHERE id_pokemon = $id");
        
    }
}