
<?php $conexion = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');

print "<p>"; print $conexion->server_info; print "</p>";

?>