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
    
    }else{
        exec("C:\xampp\mysql\bin\mysql.exe -u ". $_POST['user'] . " < database/employees.sql");
    }
    // Sentencia para win = C:\xampp\mysql\bin\mysql.exe -u "" < Desktop\test_db-master\employees.sql
    }else{
        if(isset($_POST['psswd']) && !empty($_POST['psswd'])){
           // mysql --user="" --password="" < employees.sql
        }else{
           // "mysql --user=".$_POST['user']." < employees.sql"
        }    
    }
}
?>