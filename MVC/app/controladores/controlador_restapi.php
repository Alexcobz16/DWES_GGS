<?php

class ControladorRestAPI{
//    public function __construct(){

//     }

    public function getFormulario($params){
        $modelo_pokemon = new ModeloPokemon();
        if($params['funcion'] == 'add'){
            $datos = array();
            $datos['tipos'] = $modelo_pokemon->getAllTipos();
            require_once('./app/vistas/pokemon/formulario_add_restapi.tpl.php');
        }else{
            $id = explode('/', $params['path']);
            $datos = $modelo_pokemon->getPokemon($id[1]);
            require_once('./app/vistas/pokemon/formulario_update_restapi.tpl.php');
        }
    }

    public function getOpciones(){
        require_once('./app/vistas/pokemon/opciones_restapi.tpl.php');
    }

    public function procesar($path){
        $modelo_pokemon = new ModeloPokemon();

        switch($_SERVER['REQUEST_METHOD']){
        case 'GET': 
            $params = explode('/', $path['path']);
            $json = "";
            if($params[1] == ""){
                $datos = $modelo_pokemon->getAllPokemons($params);
            }else{
                $datos = $modelo_pokemon->getPokemon($path['path'][1]);
            }
            header('Content-Type: application/json');
            $json = json_encode($datos);
            echo $json;
            break;
        case 'POST':
            $datos = array($_POST['poke_nombre'], $_POST['poke_desc'], $_POST['poke_img'], $_POST['poke_tipo']);
            $contenido = json_encode($datos);
            $curl = curl_init('./controlador=restapi&metodo=addPokemon');
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $contenido);
            $modelo_pokemon->insertJSONPokemon(json_decode($contenido));
            break;
        case 'PUT':

            break;
        default:
        throw new Exception('Método REQUEST no válido');
        }
    }
}