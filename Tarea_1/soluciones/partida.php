<?php require('definir.php');

$dificultad = $_POST['dificultad'];
$inicio = false;


if($inicio == false){

switch ($dificultad) {
    case '1':
        echo "<div>";
        echo "<table>";

        for($i=0;$i<count($sudoku[$dificultad-1]);$i++){
            echo '<tr>';

            for($j=0;$j<count($sudoku[$dificultad-1][$i]);$j++){
                if($sudoku[$dificultad-1][$i][$j] == '.'){
                    echo "<td class='huecos'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }else{
                    echo "<td class='pistas'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";
        echo "</div>";
        $sudokuPartida = $sudoku[$dificultad-1];
        break;
    case '2':
        echo "<div>";
        echo "<table>";

        for($i=0;$i<count($sudoku[$dificultad-1]);$i++){
            echo '<tr>';

            for($j=0;$j<count($sudoku[$dificultad-1][$i]);$j++){
                if($sudoku[$dificultad-1][$i][$j] == '.'){
                    echo "<td class='huecos'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }else{
                    echo "<td class='pistas'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";
        echo "</div>";  
        $sudokuPartida = $sudoku[$dificultad-1];
        break;
    case '3':
        echo "<div>";
        echo "<table>";

        for($i=0;$i<count($sudoku[$dificultad-1]);$i++){
            echo '<tr>';

            for($j=0;$j<count($sudoku[$dificultad-1][$i]);$j++){
                if($sudoku[$dificultad-1][$i][$j] == '.'){
                    echo "<td class='huecos'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }else{
                    echo "<td class='pistas'>",$sudoku[$dificultad-1][$i][$j],"</td>";
                }
            }
            echo '</tr>';
        }
        echo "</table>";
        echo "</div>";  
        $sudokuPartida = $sudoku[$dificultad-1];
        break; 
}

$inicio = true;

}else{

while($continue){
    


    echo "<div>";
    echo "<table>";  

    for($i=0;$i<count($sudokuPartida);$i++){
        
        echo '<tr>';

        for($j=0;$j<count($sudokuPartida[$i]);$j++){
            if($sudokuPartida[$i][$j] == '.'){
                echo "<td class='huecos'>",$sudokuPartida[$i][$j],"</td>";
            }else{
                echo "<td class='pistas'>",$sudokuPartida[$i][$j],"</td>";
            }
        }

        echo '<tr>';

    }

    echo "</table>";
    echo "</div>";  

}

}
?>