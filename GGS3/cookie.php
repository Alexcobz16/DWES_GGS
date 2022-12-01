

<?php

// // Iniciamos la sesión o recuperamos la anterior sesión existente

// session_start();

// // Comprobamos si la variable ya existe


// if (isset($_SESSION['visitas'])){
// $_SESSION['visitas']++;
// echo "Has entrado " . $_SESSION['visitas'] . " veces";
// echo "<br/>";
// echo "Última actualización: " . $_SESSION["hora"];
// array_push($horas, $_SESSION['hora']);
// echo count($horas);

// }else{

//     $_SESSION['visitas'] = 0;
//     echo "¿Primera vez?";
//     $_SESSION['visitas']++;
//     $_SESSION['hora'] = date("h:i:sa");
//     $horas[$_SESSION['visitas']] = $_SESSION['hora'];

// }

$hora = date("d/m/y h:i:sa");
if(isset($_COOKIE['visitas']) && $_COOKIE['visitas'] == 2 && $set == false){
    $set = true;
    setcookie('visitas', 27);
}else{
    $set = false;
    setcookie('visitas',2);
}

if($set){
    echo $hora;
}

?>  

