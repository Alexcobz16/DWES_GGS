<?php 
//Se imprimen los sudokus mediante el include.
include('generar.php'); 
    echo "<br/>";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Selector de dificultad</title>
    </head>
    <body>
        <h1>Elige dificultad</h1>
        <br/>
        <!--Aquí se elige la dificultad del sudoku siendo:
            Fácil = 1
            Medio = 2
            Difícil = 3
        -->
        <form method="post" action="sudoku.php">  
            <p><input type="radio" value="1" name="dificultad">Fácil <input type="radio" value="2" name="dificultad">Medio <input type="radio" value="3" name="dificultad">Difícil</p>
           <input type="submit" value="Jugar">
        </form>
    </body>
</html>
