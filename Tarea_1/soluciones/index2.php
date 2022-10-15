<?php require('partida.php');?>

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
            <p>Número <input type="number" name="valor" max="9" min="1" required></p>
            <p>Fila <input type="number" name="fila" max="9" min="1" required></p>
            <p>Columna <input type="number" name="columna" max="9" min="1" required></p>
            <input type="submit" value="insertar" name="accion">
            <input type="submit" value="eliminar" name="accion">
            <input type="submit" value="candidatos" name="accion">
        </form>
    </body>
</html>