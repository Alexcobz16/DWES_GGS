<?php require_once('generar.php'); ?>
<?php 
// Al tener los sudokus por separado se imprimen mediante un for y un switch
// donde la variable i es la que determina si el sudoku que se imprime es
// fácil, medio o difícil
for($i=0;$i<3;$i++){ ?>
    <div class='sudokuContainer'>
    <?php
    switch($i){
        case 0:?> <th>Fácil</th>
        <?php
        generar($sudokuFacil);
            break; 
        case 1:?> <th>Medio</th>
        <?php
        generar($sudokuMedio);
            break;
        case 2:
            ?> <th>Difícil</th>
            <?php
        generar($sudokuDificil);
            break;
    }
    ?>
    </div>
<?php
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Selector de dificultad</title>
    </head>
    <body>
        <!--El formulario es idéntico al que se ve en el Ej1-->
        <h1>Elige dificultad</h1>
        <br/>
        <form method="post" action="partida.php">  
            <p><input type="radio" value="1" name="dificultad" checked>Fácil <input type="radio" value="2" name="dificultad">Medio <input type="radio" value="3" name="dificultad">Difícil</p>
           <input type="submit" value="Jugar">
        </form>
    </body>
</html>