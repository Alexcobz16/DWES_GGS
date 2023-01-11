<?php

Class Core{
  
    protected $controladorActual = 'pokemon';
    protected $metodoActual = 'listar';
    protected $parametros = [];

    //constructor
    public function __construct(){
        //Aquí sobreescribimos el controlador actual, el método y los parámetros que hay por defecto.
        if((isset($_GET['controlador']))&&(!empty($_GET['controlador']))){
          $this->controladorActual = filter_var($_GET['controlador'], FILTER_SANITIZE_URL);
        }
        if((isset($_GET['metodo']))&&(!empty($_GET['metodo']))){
            $this->metodoActual = filter_var($_GET['metodo'], FILTER_SANITIZE_URL);
        }
        
        $parametros = array_filter($_GET, fn($element)=>!in_array($element, ['controlador','metodo']), ARRAY_FILTER_USE_KEY);
        
        $this->parametros = filter_var_array($parametros, FILTER_SANITIZE_URL);
        
        //print_r(ucwords($this->controladorActual, '_'));
        
        if(is_file('./app/controladores/'.$this->controladorActual.'.php')){
            require_once('./app/controladores/'.$this->controladorActual.'.php');
            $nombre_controlador = str_replace('_','' ,ucwords($this->controladorActual,'_'));
            $this->controladorActual = new $nombre_controlador();

        }else{
          header("HTTP/1.0 404 Not Found");
        }

        if(method_exists($this->controladorActual, $this->metodoActual)){
            
            $nombreMetodo = $this->metodoActual;

            $this->controladorActual->$nombreMetodo($this->parametros); //VAMOS POR AQUÍ, YA HEMOS LLAMADO AL CONTROLADOR Y AL MÉTODO QUE QUEREMOS. AHORA YA DENTRO DEL MÉTODO HABRÍA QUE OBTENER LOS DATOS DEL MODELO, Y SACARLOS POR LA VIEW. EN VIDE VAMOS EMPEZNDO EL 7
        }
    
    }

}