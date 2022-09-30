<html>
     <head>
        <title>Cabina</title>
    </head>
     <body>
        <form>
            <p>Tiempo (en minutos) que ha durado la llamada: <input name="minutos"></input></p>
            <input type="submit" value="Calcular">
        </form>
     </body>
</html>

<?php

comprobarMinutos();

function comprobarMinutos(){

$minimo = 5;
$minutos = $_REQUEST["minutos"];
$precio = 20;

    if((is_numeric($minutos))&&($minutos==0)){
        echo "<p style='color:red'>ERROR: No se admite el 0</p>";
    }elseif(is_numeric($minutos)){
        calcularPrecio($minimo,$minutos,$precio);
    }else{
        echo "<p style='color:red'>ERROR: Solo se admiten números</p>";
    }
}


function calcularPrecio($minimo,$minutos,$precio){
    if($minutos>5){

        $minutos = $minutos - $minimo;
    
        $precio = $precio + $minutos*$minimo;
    
    }

    mostrarPrecio($precio);

}




function mostrarPrecio($precio){
    if($precio == 20){
        echo "Precio mínimo de la llamada: ", money_format("%i",$precio/100), "€";
    }else{
        echo "Precio de la llamada: ", money_format("%i",$precio/100), "€";
    }
}

?>