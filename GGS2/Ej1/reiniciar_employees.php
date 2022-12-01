<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function resetear($plataforma){
        // echo "Windows con contraseña";
/*      exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." DROP DATABASE employees;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." < database/employees.sql;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_departments.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_employees.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_dept_emp.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_dept_manager.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_titles.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_salaries1.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_salaries2.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." employees < database/load_salaries3.dump;");
 */
        // echo "Windows sin contraseña";
/*      exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " DROP DATABASE employees;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " < database/employees.sql;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_departments.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_employees.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_dept_emp.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_dept_manager.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_titles.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_salaries1.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_salaries2.dump;");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " employees < database/load_salaries3.dump;");
 */   
            // echo "Linux con contraseña";
/*         exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." DROP DATABASE employees;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." < database/employees.sql;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_departments.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_employees.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_dept_emp.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_dept_manager.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_titles.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_salaries1.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_salaries2.dump;");
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." employees < database/load_salaries3.dump;");
 */      
            // echo "Linux sin contraseña";
/*          exec("mysql --user=". $_POST['user'] ." DROP DATABASE employees;");
            exec("mysql --user=". $_POST['user'] ." < database/employees.sql;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_departments.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_employees.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_dept_emp.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_dept_manager.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_titles.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_salaries1.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_salaries2.dump;");
            exec("mysql --user=". $_POST['user'] ." employees < database/load_salaries3.dump;");
 */        
}    
    

