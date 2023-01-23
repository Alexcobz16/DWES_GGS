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
    public function getAllPokemons(){
        $resultado = $this->manejador_conexion->query('SELECT pokemons.id_pokemon, pokemons.nombre, tipos.nombre AS tipo, pokemons.url_imagen FROM pokemons INNER JOIN tipos ON pokemons.tipo = tipos.id_tipo')->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;       
    }

    public function getPokemon($id){
        $resultado = $this->manejador_conexion->query('SELECT pokemons.id_pokemon, pokemons.nombre, tipos.nombre AS tipo, pokemons.url_imagen, pokemons.descripcion FROM pokemons INNER JOIN tipos ON pokemons.tipo = tipos.id_tipo WHERE pokemons.id_pokemon = \''.$id.'\'')->fetchAll(PDO::FETCH_ASSOC);
        
        return reset($resultado);
        
    }

    public function deletePokemon($id){
        return $this->manejador_conexion->query('DELETE from pokemons WHERE pokemons.id_pokemon = '.$id);
    }

}