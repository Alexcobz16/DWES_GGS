<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Sudoku</title>
    </head>
    <body>
    <?php
//Para que se muestre el sudoku que necesitamos tenemos que pasárselos mediante el archivo donde está declarado.
require('definir.php');
$dificultad = $_POST['dificultad'];
//Se imprime la dificultad elegida en función de la dificultad que se haya elegido en el index1.php
switch($dificultad){
    case 1: echo "<h1>Fácil</h1>";
    break;
    case 2: echo "<h1>Medio</h1>";
    break;
    case 3: echo "<h1>Difícil</h1>";
    break;
}
echo "<div><table>";
//Estos bucles imprimen el sudoku que hemos elegido.
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