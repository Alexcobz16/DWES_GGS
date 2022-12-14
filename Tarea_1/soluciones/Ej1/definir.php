<html>
<head>
    <title>Sudoku</title>
    <meta charset="utf-8"> 
</head>
<body>
    <?php
//Aquí se encuentran las declaraciones de los sudokus. En este caso es un array tridimensional
//en el que el array sudoku se compone de 3 posiciones que corresponden con cada uno de los sudokus
//y en el interior de cada uno un array que corresponden con las casillas de las filas y sus valores.
    $sudoku = array (
        array(
            array('.','.',1,9,4,8,5,'.','.'),
            array('.','.',3,7,'.',6,1,'.','.'),
            array('.',5,'.','.','.','.','.',7,'.'),
            array(1,'.',6,'.',3,'.',8,'.',5),
            array('.','.','.','.','.','.','.','.','.'),
            array(3,'.',2,'.',9,'.',6,'.',7),
            array('.',6,'.','.','.','.','.',1,'.'),
            array('.','.',7,1,'.',9,4,'.','.'),
            array('.','.',5,8,6,3,7,'.','.')
        ),
    
        array(
            array('.','.','.','.',8,4,'.','.',2),
            array(2,'.','.','.','.','.',5,'.','.'),
            array('.',3,'.',1,'.','.','.',4,'.'),
            array('.',8,5,'.','.',9,'.','.','.'),
            array(1,7,'.','.','.','.','.',2,9),
            array('.','.','.',3,'.','.',8,5,'.'),
            array('.',6,'.','.','.',5,'.',7,'.'),
            array('.','.',8,'.','.','.','.','.',6),
            array(9,'.','.',4,1,'.','.','.','.')
    ),

        array(
            array(6,2,'.','.','.',4,'.',7,'.'),
            array(5,'.',3,'.',9,'.','.','.','.'),
            array(8,'.','.','.',6,'.','.',3,'.'),
            array(7,'.','.','.',1,'.','.','.','.'),
            array('.','.','.',6,'.',9,'.','.','.'),
            array('.','.','.','.',8,'.','.','.',6),
            array('.',5,'.',3,'.','.','.','.',2),
            array('.','.','.',7,'.','.',6,'.',3),
            array('.',7,'.',2,'.','.','.',1,8)
        )
    );

    ?>
</body>
</html>