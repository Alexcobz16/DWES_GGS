<?php require('definir.php');

$dificultad = $_POST['dificultad'];

switch ($dificultad) {
    case '1':
        echo "<table>";

        for($i=0;$i<$sudoku[$dificultad-1].count;$i++){
            echo '<tr>';

            for($j=0;$j<$sudoku[$dificultad-1][$i].count;$j++){
                if($sudoku[$dificultad-1][$i][$j] == '.'){
                    echo "<td class='huecos'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }else{
                    echo "<td class='pistas'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";    
        break;
    case '2':
        echo "<table>";

        for($i=0;$i<$sudoku[$dificultad-1].count;$i++){
            echo '<tr>';

            for($j=0;$j<$sudoku[$dificultad-1][$i].count;$j++){
                if($sudoku[$dificultad-1][$i][$j] == '.'){
                    echo "<td class='huecos'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }else{
                    echo "<td class='pistas'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";  
        break;
    case '3':
        echo "<table>";

        for($i=0;$i<$sudoku[$dificultad-1].count;$i++){
            echo '<tr>';

            for($j=0;$j<$sudoku[$dificultad-1][$i].count;$j++){
                if($sudoku[$dificultad-1][$i][$j] == '.'){
                    echo "<td class='huecos'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }else{
                    echo "<td class='pistas'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";  
        break; 
}
?>