<?php require('definir.php');

echo '<link rel="stylesheet" href="css/style.css">';

$dificultad = $_POST['dificultad'];

function iniciar(){
    static $inicio = false;
}

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
        break; 
}

$inicio = true;

$sudokuPartida = array($sudoku[$dificultad-1]);
}


if($inicio == true){
    if($_POST['accion']=="insertar"){
        insertar();
    }else if($_POST['accion']=="eliminar"){
        eliiminar();
    }else if($_POST['accion']=="candidatos"){
        candidatos();
    }
    mostrar();
}


function mostrar(){
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

function insertar(){
    if(isset($sudoku[($_POST['fila']-1)][($_POST['columna']-1)])){
        echo "<p>En esta casilla no se puede introducir</p>";
    }else{
       $sudokuPartida[($_POST['fila']-1)][($_POST['columna']-1)] = $_POST['valor'];
    }
}

function eliminar(){
    if(isset($sudoku[($_POST['fila']-1)][($_POST['columna']-1)])){
        print("<p>En esta casilla no se puede eliminar</p>");
   } else{
    $sudokuPartida[($_POST['fila']-1)][($_POST['columna']-1)] = '.';
   }
}


?>