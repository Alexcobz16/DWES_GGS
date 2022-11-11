<?php 
function resetear($plataforma){ ?>
<br/>
<form method="post">
    <h3>Login</h3>
    <p>Usuario: <input name="user"></p>
    <br/>
    <p>Contraseña (Si existe): <input name="psswd"></p>
    <input type="button" value="login" name="Login">
</form>


<?php 
if(isset($_POST['login'])){


if(($plataforma == "win") && (isset($_POST['user']) && !empty($_POST['user']))){
    if(isset($_POST['psswd']) && !empty($_POST['psswd'])){
        echo "Windows con contraseña";
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." < database/employees.sql");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_departments.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_employees.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_dept_emp.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_dept_manager.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_titles.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_salaries1.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_salaries2.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_salaries3.dump");
    }else{
        echo "Windows sin contraseña";
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " < database/employees.sql");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_departments.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_employees.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_dept_emp.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_dept_manager.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_titles.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_salaries1.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_salaries2.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_salaries3.dump");
    }
    }else{
        if(isset($_POST['psswd']) && !empty($_POST['psswd'])){
            echo "Linux con contraseña";
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." < database/employees.sql");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_departments.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_employees.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_dept_emp.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_dept_manager.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_titles.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_salaries1.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_salaries2.dump");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_salaries3.dump");
        }else{
            echo "Linux sin contraseña";
            exec("mysql --user=". $_POST['user'] ." < database/employees.sql");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_departments.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_employees.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_dept_emp.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_dept_manager.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_titles.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_salaries1.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_salaries2.dump");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_salaries3.dump");

        }    
    }
}
}

?>