<html>
<head>
    <title>Sudoku</title>
    <meta charset="utf-8">
    
</head>
<body>
    <?php
    /**
     * Realizar un fichero php donde se definan tres arrays de 9x9 elementos enteros,
     * para almacenar los siguientes 3 sudokus iniciales de tres niveles de dificultad distintos:
     */

    $limite = 9;
    $sudoku = array();

    function facil($sudoku){
        $dificultad = 1;
        
        $sudoku = array(
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
    }
    

    function medio(){
        $dificultad = 1;
        $sudoku = array(
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
    }

    function dificil(){
        $dificultad = 1;
        $sudoku = array(
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
    }
    ?>
</body>
</html>