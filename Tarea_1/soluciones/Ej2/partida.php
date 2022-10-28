<?php 
    require('generar.php');
    if(isset($_POST['dificultad'])){
        $dificultad = $_POST['dificultad'];
    }

    if(isset($_POST['insertar'])||isset($_POST['eliminar'])||isset($_POST['candidatos'])){
        if(isset($_POST['insertar'])){
            insertar($_POST['sudoku']);

        }else if(isset($_POST['eliminar'])){
            eliminar($sudoku,$sudokuFacil,$sudokuMedio,$sudokuDificil,$dificultad);
        }else if(isset($_POST['candidatos'])){
            candidatos($sudoku);
        }
    }else{
        switch($dificultad){
            case 1:
                $sudoku = $sudokuFacil;
                break;
            case 2:
                $sudoku = $sudokuMedio;
                break;
            case 3:
                $sudoku = $sudokuDificil;
                break;
           }
           mostrar($sudoku);
    }



   function insertar($sudoku){
     if(isset($_POST['valor']) && isset($_POST['fila']) && isset($_POST['columna'])){
        if(!is_int(($sudoku[$_POST['fila']-1][$_POST['columna']-1]))){
            $sudoku[($_POST['fila']-1)][($_POST['columna']-1)] = $_POST['valor'];
        }else{
            echo "No se puede insertar porque ya tienes un número ahí";
        }
    }else{
        echo "Tienen que estar marcadas las tres casillas al insertar";
    }
    mostrar($sudoku);
}

function eliminar($sudoku,$sudokuFacil,$sudokuMedio,$sudokuDificil){
    if(isset($_POST['fila']) && isset($_POST['columna'])){
        switch($dificultad){
            case 1:
                if(!is_int($sudokuFacil[$_POST['fila'][$_POST['columna']]])){
                    $sudoku[$_POST['fila']][$_POST['columna']] = '.';
                    echo "borra cosas 1";
                }else{
                    echo "No se puede borrar una posicion original";
                }
                break;
            case 2:
                if(!is_int($sudokuMedio[$_POST['fila'][$_POST['columna']]])){
                    $sudoku[$_POST['fila']][$_POST['columna']] = '.';
                    echo "borra cosas 2";
                }else{
                    echo "No se puede borrar una posicion original";
                }
                break;
            case 3:
                if(!is_int($sudokuDificil[$_POST['fila'][$_POST['columna']]])){
                    $sudoku[$_POST['fila']][$_POST['columna']] = '.';
                    echo "borra cosas 3";
                }else{
                    echo "No se puede borrar una posicion original";
                }
                break;
        }
    }
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sudoku</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Selector de dificultad</title>
    </head>
    <body>
        <br/>
        <form method="post">  
            <p>Número <input type="number" name="valor" max="9" min="1"></p>
            <p>Fila <input type="number" name="fila" max="9" min="1" required></p>
            <p>Columna <input type="number" name="columna" max="9" min="1" required></p>
            <input type="hidden" <?php echo 'value= '.$sudoku; ?> name="sudoku">
            <input type="submit" value="insertar" name="insertar">
            <input type="submit" value="eliminar" name="eliminar">
            <input type="submit" value="candidatos" name="candidatos">
        </form>
    </body>
</html>