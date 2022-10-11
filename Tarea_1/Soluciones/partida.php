<?php require('generar.php');

switch ($_POST['dificultad']) {
    case '1':
        echo "Imprime sudoku facil";
        break;
    case '2':
        echo "Imprime sudoku medio";
        break;
    case '3':
        echo "Imprime sudoku dificil";
        break;    
    }

?>