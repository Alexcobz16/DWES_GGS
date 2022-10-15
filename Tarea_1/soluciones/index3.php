<?php
function CalcularCuadro($fila, $columna) {
    
    if (($fila == 0 || $fila == 1 || $fila == 2) && ($columna == 0 || $columna == 1 || $columna == 2)) {
    return 0;

  } elseif (($fila == 0 || $fila == 1 || $fila == 2) && ($columna == 3 || $columna == 4 || $columna == 5)) {
  return 1;

  } elseif (($fila == 0 || $fila == 1 || $fila == 2) && ($columna == 6 || $columna == 7 || $columna == 8)) {
  return 2;

  } elseif (($fila == 3 || $fila == 4 || $fila == 5) && ($columna == 0 || $columna == 1 || $columna == 2)) {
  return 3;

  } elseif (($fila == 3 || $fila == 4 || $fila == 5) && ($columna == 3 || $columna == 4 || $columna == 5)) {
  return 4;

  } elseif (($fila == 3 || $fila == 4 || $fila == 5) && ($columna == 6 || $columna == 7 || $columna == 8)) {
  return 5;

  } elseif (($fila == 6 || $fila == 7 || $fila == 8) && ($columna == 0 || $columna == 1 || $columna == 2)) {
  return 6;

  } elseif (($fila == 6 || $fila == 7 || $fila == 8) && ($columna == 3 || $columna == 4 || $columna == 5)) {
  return 7;
  
  } elseif (($fila == 6 || $fila == 7 || $fila == 8) && ($columna == 6 || $columna == 7 || $columna == 8)) {
  return 8;
  }
  }


function CalcularFilaInicial($fila, $columna){

switch (calcularCuadro($fila, $columna)) {
case 0;
    return 0;
    break;
case 1;
    return 0;
    break;
case 2;
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
default:
    break;
}
}


function CalcularFilaFinal($fila, $columna) {


switch (calcularCuadro($fila, $columna)) {
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
default:
    break;
}
}

function CalcularColumnaInicial($fila, $columna) {


switch (calcularCuadro($fila, $columna)) {
case 0;
    return 0;
    break;
case 1;
    return 3;
    break;
case 2;
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
default:
    break;
}
}


function CalcularColumnaFinal($fila, $columna){


switch (calcularCuadro($fila, $columna)) {
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
default:
    break;
}
}
?>