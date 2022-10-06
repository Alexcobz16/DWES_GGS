<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
<?php
require('definir.php');
echo "<table>";
    foreach ($sudoku as $fila) {
        echo '<tr>';
        foreach ($fila as $casilla) {
            echo '<td>',$casilla,'</td>';
        }
        echo '</tr>';
    }
echo "</table>";
?>
</body>
</html>