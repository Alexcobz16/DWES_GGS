<?php

class ControladorRestAPI{
//    public function __construct(){

//     }

    public function procesar($path){
        $params = explode('/', $path['path']);

        switch($_SERVER['REQUEST_METHOD']){
        case 'GET': 
            $modelo_pokemon = new ModeloPokemon();
            $json = "";
            if(count($params) == 1){
                $datos = $modelo_pokemon->getAllPokemons($params);
            }else{
                $datos = $modelo_pokemon->getPokemon($path['path'][1]);
            }
            //print_r($datos);
            $json = json_encode($datos, JSON_FORCE_OBJECT);
            echo $json;
            break;
        case 'POST':
            break;
        default:
        throw new Exception('Método REQUEST no válido');
        }    
    }

}