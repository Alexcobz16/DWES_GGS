<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
<?php
require('definir.php');
$counter = 1;

foreach ($sudoku as $tipo) {

    switch ($counter) {
        case '1':
            echo "Fácil";
            break;

        case '2':
            echo "Medio";
            break;
        
        case '3':
            echo "Difícil";
            break;
    }

    echo "<table>";

    foreach ($tipo as $fila) {
        echo '<tr>';

        foreach ($fila as $casilla) {
            echo '<td>',$casilla,'</td>';
        }

        echo '</tr>';
    }
    
    echo "</table>";
    $counter++;
}

?>
</body>
</html>