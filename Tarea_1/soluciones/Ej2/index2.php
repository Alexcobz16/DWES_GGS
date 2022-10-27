<?php include('generar.php'); 
      echo "<br/>";

      generar();
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
        <form method="post" action="partida.php">  
            <p><input type="radio" value="1" name="dificultad" checked>Fácil <input type="radio" value="2" name="dificultad">Medio <input type="radio" value="3" name="dificultad">Difícil</p>
           <input type="submit" value="Jugar">
        </form>
    </body>
</html>