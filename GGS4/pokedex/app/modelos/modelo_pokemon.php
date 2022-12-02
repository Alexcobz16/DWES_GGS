<?php
try{
    $conexion = new PDO('mysql:dbname=pokemon;host=localhost;','root','');
    echo "La base funciona";
}catch(Exception $e){
    echo "La base da petazo en la conexion";
}

