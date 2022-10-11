<?php include_once('index1.php');

switch ($dificultad) {
    case '1':
        echo "<p>Imprime sudoku facil</p>";
        break;
    case '2':
        echo "<p>Imprime sudoku medio</p>";
        break;
    case '3':
        echo "<p>Imprime sudoku dificil</p>";
        break;    
    }

?>