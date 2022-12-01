<?php 
function resetear($plataforma, $user, $psswd){
if(($plataforma == "win") && (isset($user) && !empty($user))){
    if(isset($psswd) && !empty($psswd)){
        echo "Windows con contraseña";
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." < database/employees.sql");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_departments.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_employees.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_dept_emp.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_dept_manager.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_titles.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_salaries1.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_salaries2.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " -p". $psswd ." employees < database/load_salaries3.dump");
    }else{
        echo "Windows sin contraseña";
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " < database/employees.sql");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_departments.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_employees.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_dept_emp.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_dept_manager.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_titles.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_salaries1.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_salaries2.dump");
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $user . " employees < database/load_salaries3.dump");
    }
    }else{
        if(isset($psswd) && !empty($psswd)){
            echo "Linux con contraseña";
           exec("mysql --user=". $user ." --password=". $psswd ." < database/employees.sql");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_departments.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_employees.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_dept_emp.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_dept_manager.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_titles.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_salaries1.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_salaries2.dump");
           exec("mysql --user=". $user ." --password=". $psswd ." employees < database/load_salaries3.dump");
        }else{
            echo "Linux sin contraseña";
            exec("mysql --user=". $user ." < database/employees.sql");
            exec("mysql --user=". $user ." employees < database/load_departments.dump");
            exec("mysql --user=". $user ." employees < database/load_employees.dump");
            exec("mysql --user=". $user ." employees < database/load_dept_emp.dump");
            exec("mysql --user=". $user ." employees < database/load_dept_manager.dump");
            exec("mysql --user=". $user ." employees < database/load_titles.dump");
            exec("mysql --user=". $user ." employees < database/load_salaries1.dump");
            exec("mysql --user=". $user ." employees < database/load_salaries2.dump");
            exec("mysql --user=". $user ." employees < database/load_salaries3.dump");

        }    
    }
}


?>