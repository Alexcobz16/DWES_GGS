<?php include('generar.php'); 
      echo "<br/>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Selector de dificultad</title>
    </head>
    <body>
        <h1>Elige dificultad</h1>
        <br/>
        <form method="post" action="index2.php">  
            <p><input type="radio" value="1" name="dificultad">Fácil <input type="radio" value="2" name="dificultad">Medio <input type="radio" value="3" name="dificultad">Difícil</p>
           <input type="submit" value="Jugar">
        </form>
    </body>
</html>
