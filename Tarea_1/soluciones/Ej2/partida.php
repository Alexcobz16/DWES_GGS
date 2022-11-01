<?php require_once('generar.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
//Mostramos el sudoku según la dificultad que se haya elegido en el index2.php
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
//Aquí se controlan las acciones que se realizan según se requiera.
//Este bloque se comporta de la misma forma en sus tres opciones.
if(isset($_POST['insertar'])&&!empty($_POST['valor'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
    //Para que se pueda usar se deserializa el sudoku del input hidden.
    $sudoku = unserialize(base64_decode($_POST['sudoku']));
    //Necesitamos también el sudoku inicial para que no se modifiquen las pistas de cada sudoku.
    $original = unserialize(base64_decode($_POST['original']));
    //Guardamos el sudoku de nuevo para aplicar los cambios.
    $sudoku = insertar($sudoku,$_POST['valor'],$_POST['fila'],$_POST['columna'], $original);
}else if(isset($_POST['eliminar'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
    $sudoku = unserialize(base64_decode($_POST['sudoku']));
    $original = unserialize(base64_decode($_POST['original']));
    $sudoku = eliminar($sudoku, $_POST['fila'], $_POST['columna'],$original);
}else if(isset($_POST['candidatos'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
    $sudoku = unserialize(base64_decode($_POST['sudoku']));
    $original = unserialize(base64_decode($_POST['original']));
    //Los candidatos se guardan para imprimirse junto al formulario.
    $candidatos = candidatos($sudoku,$_POST['fila'],$_POST['columna'],$original);
}

function insertar($sudoku,$valor,$fila,$columna, $original){
// Aquí se comprueba que no exista un valor en la posición en la que se va a introducir un número.
    if(($sudoku[$fila-1][$columna-1] == '.')&&($original[$fila-1][$columna-1] == '.')){
        // Convierto en tipo number el post del valor que se va a introducir.
        $sudoku[$fila-1][$columna-1] = intval($valor);
    }
    //Devuelvo el sudoku con los cambios guardados.
    return $sudoku = generar($sudoku);
}

function eliminar($sudoku,$fila,$columna,$original){
// Aquí se comprueba que exista un valor en el sudoku modificado pero no en el original
    if(($sudoku[$fila-1][$columna-1] != '.')&&($original[$fila-1][$columna-1] == '.')){
        // Igualo la posición a . porque es como interpreté el valor 0
        $sudoku[$fila-1][$columna-1] = '.';
    }
    // Devuelvo el sudoku para guardar los cambios.
    return $sudoku = generar($sudoku);
}

function candidatos($sudoku,$fila,$columna,$original){
    // Compruebo que en el sudoku que modificamos no haya valor.
    if($sudoku[$fila-1][$columna-1] == '.'){
        // Asigno un rango de 1 a 9 para comprobar cuáles de esos números existen.
        $rango = range(1,9);
        // Aquí se averiguan los números no introducidos en la fila elegida.
        $candidatosFilas = array_diff($rango,$sudoku[$fila-1]);
        // Aquí se guardan en un array los valores de la columna elegida
        for($i=0;$i<count($sudoku);$i++){
            for($j=0;$j<count($sudoku[$fila-1]);$j++){
                if($j==$columna-1){
                    $candidatosColumnas[$i] = $sudoku[$i][$j];
                    break;
                }
            }
        }
        // Modificamos los valores de las columnas para ver cuáles no se han introducido.
        $candidatosColumnas = array_diff($rango, $candidatosColumnas);
        // Aquí vemos el array más largo y lo recorremos.
        if(count($candidatosFilas)>count($candidatosColumnas)){
            // la variable posicion son las posiciones de los candidatos que se van a imprimir.
            $posicion = 0;
            // Aquí se comprueba si el candidato de la fila existe también en el de la columna
            foreach($candidatosFilas as $candidato){
                if(in_array($candidato, $candidatosColumnas)){
                    $candidatos[$posicion] = $candidato;
                    $posicion++;
                }
            }
        }else{
            $posicion = 0;
            // Aquí se comprueba si el candidato de la columna existe también en el de la fila
            foreach($candidatosColumnas as $candidato){
                if(in_array($candidato, $candidatosFilas)){
                    $candidatos[$posicion] = $candidato;
                    $posicion++;
                }
            }
            // Volvemos a mostrar el sudoku.
            generar($sudoku);
            // Devolvemos el array de candidatos.
        return $candidatos; 
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
        <form method="post" action="partida.php">  
            <p>Número <input type="number" name="valor" max="9" min="1"></p>
            <p>Fila <input type="number" name="fila" max="9" min="1" required></p>
            <p>Columna <input type="number" name="columna" max="9" min="1" required></p>
            <input type="submit" value="Insertar" name="insertar">
            <input type="submit" value="Eliminar" name="eliminar">
            <input type="submit" value="Candidatos" name="candidatos"> <?php if(isset($_POST['candidatos'])&&!empty($_POST['fila'])&&!empty($_POST['columna'])){
                // Aquí se imprimen los candidatos.
                        foreach($candidatos as $candidato){
                            echo " ". $candidato;
                        } 
            } ?>
            <input type="hidden" name="sudoku" value="<?php echo base64_encode(serialize($sudoku)); ?>">
            <input type="hidden" name="original" value="<?php echo base64_encode(serialize($original)); ?>">
        </form>
    </body>
</html>