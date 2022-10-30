<?php require_once('generar.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(isset($_POST['dificultad'])){
    switch($_POST['dificultad']){
        case 1:
            $sudoku = generar($sudokuFacil);
            $original = $sudokuFacil;
            break;
        case 2:
            $sudoku = generar($sudokuMedio);
            $original = $sudokuMedio;
            break;
        case 3:
            $sudoku = generar($sudokuDificil);
            $original = $sudokuDificil;
            break;
    }
    $dificultad = $_POST['dificultad'];
}

if(isset($_POST['insertar'])&&!empty($_POST['valor'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
    $sudoku = unserialize(base64_decode($_POST['sudoku']));
    $original = unserialize(base64_decode($_POST['original']));
    $sudoku = insertar($sudoku,$_POST['valor'],$_POST['fila'],$_POST['columna'], $original);
}else if(isset($_POST['eliminar'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
    $sudoku = unserialize(base64_decode($_POST['sudoku']));
    $original = unserialize(base64_decode($_POST['original']));
    $sudoku = eliminar($sudoku, $_POST['fila'], $_POST['columna'],$original);
}else if(isset($_POST['candidatos'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
    $sudoku = unserialize(base64_decode($_POST['sudoku']));
    candidatos();
}

function insertar($sudoku,$valor,$fila,$columna, $original){

    if(($sudoku[$fila-1][$columna-1] == '.')&&($original[$fila-1][$columna-1] == '.')){
        $sudoku[$fila-1][$columna-1] = intval($valor);
    }
    return $sudoku = generar($sudoku);
}

function eliminar($sudoku,$fila,$columna,$original){
    if(($sudoku[$fila-1][$columna-1] != '.')&&($original[$fila-1][$columna-1] == '.')){
        $sudoku[$fila-1][$columna-1] = '.';
    }
    return $sudoku = generar($sudoku);
}

function candidatos($sudoku,$fila,$columna){
    if($sudoku[$fila-1][$columna-1] == '.'){

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
        <form method="post" action="partida.php">  
            <p>Número <input type="number" name="valor" max="9" min="1"></p>
            <p>Fila <input type="number" name="fila" max="9" min="1" required></p>
            <p>Columna <input type="number" name="columna" max="9" min="1" required></p>
            <input type="submit" value="Insertar" name="insertar">
            <input type="submit" value="Eliminar" name="eliminar">
            <input type="submit" value="Candidatos" name="candidatos">
            <input type="hidden" name="sudoku" value="<?php echo base64_encode(serialize($sudoku)); ?>">
            <input type="hidden" name="original" value="<?php echo base64_encode(serialize($original)); ?>">
        </form>
    </body>
</html>