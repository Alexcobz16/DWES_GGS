<?php
    class ModeloPokemon{
        private $conexion;    
        function __construct(){
            $conexion = new PDO('mysql:host=localhost;dbname=pokemon', 'root');
        }

        function getAllPokemon(){
            $this->conexion->prepare("SELECT * FROM pokemons");
    }
}