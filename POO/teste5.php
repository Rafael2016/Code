<?php

function __autoload($class_name) {
    include $class_name.".php";
}

$tipo = $_GET["tipo"];

$DB = null;

if($tipo == "m"){
    $db = new Mysql();
} else if($tipo == "o"){
    $db = new Oracle();
}

$db->connect();
echo "<br>";
$db->desconnect();
echo "<br>";
$db->query("SELECT * FROM blabla");
echo "<br/>";
$db->ping("192.168.300.222");
?>
