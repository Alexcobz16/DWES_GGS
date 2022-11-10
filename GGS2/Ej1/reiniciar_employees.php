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

if(($plataforma == "win") && (isset($_POST['login'])) && (isset($_POST['user']) && !empty($_POST['user']))){
    if(isset($_POST['psswd']) && !empty($_POST['psswd'])){
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " -p". $_POST['psswd'] ." < database/employees.sql");
    }else{
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " < database/employees.sql");
    }
    }else{
        if(isset($_POST['psswd']) && !empty($_POST['psswd'])){
           exec("mysql --user=". $_POST['user'] ." --password=". $_POST['psswd'] ." < employees.sql");
        }else{
            exec("mysql --user=". $_POST['user'] ." < employees.sql");
        }    
    }
}
?>