<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<?php
require('definir.php');
$counter = 1;

foreach ($sudoku as $tipo) {

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

    echo "<table>";

    foreach ($tipo as $fila) {
        echo '<tr>';

        foreach ($fila as $casilla) {
            if($casilla == '.'){
                echo '<td class="huecos">',$casilla,'</td>';
            }else{
                echo '<td class="pistas">',$casilla,'</td>';
            }
        }

        echo '</tr>';
    }
    
    echo "</table>";
    $counter++;
}

?>
</body>
</html>