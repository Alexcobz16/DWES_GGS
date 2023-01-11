<?php

class Pokemon{


    public function __construct(){
        //echo 'controlador pokemon cargado';
    }

    public function listar(){
      if(is_file(RUTA_APP.'./app/controladores/ModeloPokemon.php')){
        require_once(RUTA_APP.'./app/controladores/ModeloPokemon.php');
      }
    }
}