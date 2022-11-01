<?php

function dividirSudoku($fila, $columna) {

    if (($columna==0 || $columna==1 || $columna==2) && ($fila==0 || $fila==1 || $fila==2)) {
        return 0;
    } else if(($columna==3 || $columna==4 || $columna==5) && ($fila==0 || $fila==1 || $fila==2)){
        return 1;
    }else if(($columna==6 || $columna==7 || $columna==8) && ($fila==0 || $fila==1 || $fila==2)){
        return 2;
    }else if(($columna==0 || $columna==1 || $columna==2) && ($fila==3 || $fila==4 || $fila==5)){
        return 3;
    }else if(($columna==3 || $columna==4 || $columna==5) && ($fila==3 || $fila==4 || $fila==5)){
        return 4;
    }else if(($columna==6 || $columna==7 || $columna==8) && ($fila==3 || $fila==4 || $fila==5)){
        return 5;
    }else if(($columna==0 || $columna==1 || $columna==2) && ($fila==6 || $fila==7 || $fila==8)){
        return 6;
    }else if(($columna== 3|| $columna==4 || $columna==5) && ($fila==6 || $fila==7 || $fila==8)){
        return 7;
    }else if(($columna==6 || $columna==7 || $columna==8) && ($fila==6 || $fila==7 || $fila==8)){
        return 8;
  }
  }

  function filaInicial($fila, $columna){
    switch (dividirSudoku($fila, $columna)) {
    case 0: 
        return 0;   
        break;
    case 1: 
        return 0;   
        break;
    case 2: 
        return 0;   
        break;
    case 3: 
        return 3;  
        break;
    case 4: 
        return 3;   
        break;
    case 5: 
        return 3;   
        break;
    case 6: 
        return 6;   
        break;
    case 7: 
        return 6;   
        break;
    case 8: 
        return 6;   
        break;
    }

}

function columnaInicial($fila, $columna) {
    switch (dividirSudoku($fila, $columna)) {
    case 0: 
        return 0;
        break;
    case 1: 
        return 3;
        break;
    case 2: 
        return 6;
        break;
    case 3: 
        return 0;
        break;
    case 4: 
        return 3;
        break;
    case 5: 
        return 6;
        break;
    case 6: 
        return 0;
        break;
    case 7: 
        return 3;
        break;
    case 8: 
        return 6;
        break;
    }
}

function filaFinal($fila, $columna) {
    switch (dividirSudoku($fila, $columna)) {
    case 0: 
        return 2;
        break;
    case 1: 
        return 2;
        break;
    case 2: 
        return 2;
        break;
    case 3: 
        return 5;
        break;
    case 4: 
        return 5;
        break;
    case 5: 
        return 5;
        break;
    case 6: 
        return 8;
        break;
    case 7: 
        return 8;
        break;
    case 8: 
        return 8;
        break;
    }
}


function columnaFinal($fila, $columna){
    switch (dividirSudoku($fila, $columna)) {
    case 0: 
        return 2;
        break;
    case 1: 
        return 5;
        break;
    case 2: 
        return 8;
        break;
    case 3: 
        return 2;
        break;
    case 4: 
        return 5;
        break;
    case 5: 
        return 8;
        break;
    case 6: 
        return 2;
        break;
    case 7: 
        return 5;
        break;
    case 8: 
        return 8;
        break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Sudoku</title>
</head>
<body>
    <h1>Modo debug</h1>
<?php
require './generar.php';
for ($i=0; $i < 9; $i++) { 
    for ($j=0; $j < 9; $j++) { 
        $division=dividirSudoku($i, $j);
        $filaInicio=filaInicial($i, $j);
        $columnaInicio=columnaInicial($i, $j);
        $filaFin=filaFinal($i, $j);
        $columnaFin=columnaFinal($i, $j);
        print $i.",".$j." - " .$division." (" .$filaInicio. ", " .$columnaInicio. ") - (" .$filaFin. ", " .$columnaFin. ") | ";
    }
    print "</br>";
}

?>
</body>
</html>