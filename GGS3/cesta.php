<?php
session_start();
$total = 0;
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>PagaPoComp Cesta</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <table>
            <tr>
                <td>Nombre</td>
                <td>Cantidad</td>
                <td>Precio</td>
            </tr>
<?php
foreach($_SESSION['cesta']['productos'] as $productos){
    foreach($productos as $producto){
        foreach($producto as $contenido){
            ?>
            <tr>
                <td><?php echo $contenido['nombre']; ?></td>
                <td><?php echo $contenido['cantidad']; ?></td>
                <td><?php echo $contenido['precio']; ?></td>
            </tr>
            <?php
            $total += $contenido['cantidad'] * $contenido['precio'];
        }
    }
}

?>
<h2>Total: <?php echo $total; ?></h2>
<table>
</body>
</html>