<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
<?php
require('definir.php');
foreach ($sudoku as $tipo) {
    echo "<table>";
    foreach ($tipo as $fila) {
        echo '<tr>';
        foreach ($fila as $casilla) {
            echo '<td>',$casilla,'</td>';
        }
        echo '</tr>';
    }
    echo "</table>";

}

?>
</body>
</html>