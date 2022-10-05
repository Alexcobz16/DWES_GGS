<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
</head>
<body>
<?php
require('definir.php');
echo "<table>";
    for($i=0;$i<$sudoku.count;$i++){
        echo "<tr>";
        for($j=0;$j<$sudoku[$i].count;$j++){
            echo "<td>",print($sudoku[$i][$j]),"</td>";
        }
        echo "</tr>";
    }
echo "</table>";
?>
</body>
</html>