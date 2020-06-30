<?php
include("Cachorro.php");

Cachorro::setNome("Bob");
echo Cachorro::getNome();
echo Cachorro::latir();

Cachorro::setNome("Xuxa");
echo Cachorro::getNome();
echo Cachorro::latir();
echo Cachorro::getNome();

$v1 = Cachorro::getCount("AAAAAAA");
echo "<br/>";
echo Cachorro::getCount("11");
?>