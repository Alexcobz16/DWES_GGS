<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Parámetros de conexión</title>
</head>
<body>

<h1>Conexión a la base de datos</h1>
<p>Intruduzca los datos de conexión</p>
<!--Crear aquí un formulario para introducir los parámetros de conexión, que mande al script de listado de productos.-->  
<br/>
<!-- Para enviar los datos se envía un formulario mediante POST al archivo donde se van a ejecutar las consultas (productos.php) -->
<form method="post" action="./productos.php">
    <!-- Se pide un usuario y contraseña para iniciar sesión en la base de datos -->
    <p>Usuario: <input name="user"></p>
    <!-- En caso que no exista la contraseña se puede dejar en blanco -->
    <p>Contraseña (Si existe): <input name="psswd"></p>
    <!-- Envía el formulario sin importar los campos añadidos -->
    <input type="submit" value="Consultar productos" name="login">
</form>
</body>
</html> 