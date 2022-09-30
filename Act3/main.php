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
#llamadas menos de 5min = 20 cent
#llamadas de mas de 5 min = 5 cent/min
$minimo = 5;
$minutos = $_REQUEST["minutos"];
$precio = 20;

if($minutos>5){

    $minutos = $minutos - $minimo;

    $precio = $precio + $minutos*$minimo;

}

#falta control de errores.

if($precio == 20){
    echo "Precio mínimo de la llamada: ", money_format("%i",$precio/100), "€";
}else{
    echo "Precio de la llamada: ", money_format("%i",$precio/100), "€";
}

?>