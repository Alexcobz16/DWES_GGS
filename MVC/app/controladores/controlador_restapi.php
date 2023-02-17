<?php

class ControladorRestAPI{
//    public function __construct(){

//     }

    public function procesar($path){
        $params = explode('/', $path['path']);
        
        print_r($params);
        //echo count($params);
        switch($_SERVER['REQUEST_METHOD']){
        case 'GET': 
            $modelo_pokemon = new ModeloPokemon();
            $json = "";
            if(count($params) == 1){
                $datos = $modelo_pokemon->getAllPokemons($params);
                //$json = json_encode($datos);
            }else{
                $datos = $modelo_pokemon->getPokemon($path['path'][1]);
                //$json = json_encode($datos);
            }
            //echo $json;
            
            break;
        case 'POST':
            break;
        default:
        throw new Exception('Método REQUEST no válido');
        }    
    }

}