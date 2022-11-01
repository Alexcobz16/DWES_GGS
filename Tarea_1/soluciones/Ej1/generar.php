<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<?php
require('definir.php');
//La variable counter sirve como contador para identificar la dificultad del sudoku
//situada en el switch.
$counter = 1;

foreach ($sudoku as $tipo) {
    echo "<div class='sudokuContainer'>";

    switch ($counter) {
        case '1':
            echo "<th>Fácil</th>";
            break;

        case '2':
            echo "<th>Medio</th>";
            break;
        
        case '3':
            echo "<th>Difícil</th>";
            break;
    }
//Con los siguientes foreach se imprimen las filas y columnas que componen el sudoku.
    echo "<table>";

    foreach ($tipo as $fila) {
        echo '<tr>';

        foreach ($fila as $casilla) {
            if($casilla == '.'){
                echo "<td class='huecos'>",$casilla,"</td>";
            }else{
                echo "<td class='pistas'>",$casilla,"</td>";
            }
        }

        echo '</tr>';
    }
    
    echo "</table></div>";    
    $counter++;
}

?>
</body>
</html>