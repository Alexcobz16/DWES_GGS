<?php
 require('partida.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sudoku</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Selector de dificultad</title>
    </head>
    <body>
        <br/>
        <form method="post">  
            <p>Número <input value="valor"></p>
            <p>Fila <input value="fila"></p>
            <p>Columna <input value="columna"></p>
            <input type="submit" value="insertar">
            <input type="submit" value="eliminar">
            <input type="submit" value="candidatos">
        </form>
    </body>
</html>