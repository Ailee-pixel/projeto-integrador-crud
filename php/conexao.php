<?php

$dbServer = "localhost";
$dbDatabase = "";
$dbUsuario = "root";
$dbPassword = "";

$connect = mysqli_connect($dbServer, $dbDatabase, $dbUsuario, $dbPassword);

if(!$connect){
    echo "404 error";
}
else{
    echo "connected";
}

?>