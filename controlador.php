<?php
error_reporting(0);


$server = "localhost";
$user = "root";
$pass = "";
$db = "tiendaonline";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->$conect_errno) {
    die("no");
}else {
    echo "";
}




?>