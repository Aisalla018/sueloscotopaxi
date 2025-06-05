<?php
     $usuario="sistemas";
    $password="Sistemas-2024";
    $serve="localhost";
    $bdd="agricult_prueba ";
    $puerto="";
try{$pdo = new PDO(   "mysql:host=$serve;dbname=$bdd;charset=utf8",$usuario, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

}catch (PDOException $e){die();

}
?>
