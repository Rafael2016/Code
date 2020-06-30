<?php
function __autoload($class_name) {
    include "classes/".$class_name."-class".".php";
}

$c = new Cachorro();
$p = new Oracle();
$c  = new ContaPoupanca();
?>
