<?php 
//Se declaran los 3 arrays según su dificultad
$sudokuFacil = array(
    array('.','.',1,9,4,8,5,'.','.'),
    array('.','.',3,7,'.',6,1,'.','.'),
    array('.',5,'.','.','.','.','.',7,'.'),
    array(1,'.',6,'.',3,'.',8,'.',5),
    array('.','.','.','.','.','.','.','.','.'),
    array(3,'.',2,'.',9,'.',6,'.',7),
    array('.',6,'.','.','.','.','.',1,'.'),
    array('.','.',7,1,'.',9,4,'.','.'),
    array('.','.',5,8,6,3,7,'.','.')
);

$sudokuMedio = array(
    array('.','.','.','.',8,4,'.','.',2),
    array(2,'.','.','.','.','.',5,'.','.'),
    array('.',3,'.',1,'.','.','.',4,'.'),
    array('.',8,5,'.','.',9,'.','.','.'),
    array(1,7,'.','.','.','.','.',2,9),
    array('.','.','.',3,'.','.',8,5,'.'),
    array('.',6,'.','.','.',5,'.',7,'.'),
    array('.','.',8,'.','.','.','.','.',6),
    array(9,'.','.',4,1,'.','.','.','.')
);

$sudokuDificil = array(
    array(6,2,'.','.','.',4,'.',7,'.'),
    array(5,'.',3,'.',9,'.','.','.','.'),
    array(8,'.','.','.',6,'.','.',3,'.'),
    array(7,'.','.','.',1,'.','.','.','.'),
    array('.','.','.',6,'.',9,'.','.','.'),
    array('.','.','.','.',8,'.','.','.',6),
    array('.',5,'.',3,'.','.','.','.',2),
    array('.','.','.',7,'.','.',6,'.',3),
    array('.',7,'.',2,'.','.','.',1,8)
);
?>

<?php 
//Mediante esta función se muestra el sudoku elegido.
function generar($sudoku){
    echo "<table>";
    foreach ($sudoku as $fila) {
     echo("<tr>");
         foreach($fila as $casilla){
             if($casilla == '.'){
                 echo "<td class='huecos'>",$casilla,"</td>";
             }else{
                 echo "<td class='pistas'>",$casilla,"</td>";
             }
         }
         echo("</tr>");
     }
 echo "</table></div>";
 //Devuelve el sudoku mostrado para que se puedan actualizar y aplicar los cambios en la partida.
 return $sudoku;
 }
?>
