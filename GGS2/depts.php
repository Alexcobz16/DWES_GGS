<?php 

$conexion = mysqli_connection('localhost', 'root', '1234', 'employees');

$select = $conexion->query('SELECT "dept_no", "dept_name" FROM departments');
$conexion->commit();
while($departamento = $select->fetch_object()){
    print "<p> $departamento->dept_no de nombre $departamento->dept_name </p>";
}

?>