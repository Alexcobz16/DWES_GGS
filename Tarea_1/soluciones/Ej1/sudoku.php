

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Sudoku</title>
    </head>
    <body>

    <?php
require('definir.php');
$dificultad = $_POST['dificultad'];

switch($dificultad){
    case 1: echo "<h1>Fácil</h1>";
    break;
    case 2: echo "<h1>Medio</h1>";
    break;
    case 3: echo "<h1>Difícil</h1>";
    break;
}
echo "<div><table>";
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
?>

</body>
</html>