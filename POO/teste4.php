<?php
include("Impressora.php");

$impressora = new Impressora();
$impressora->connect();
$impressora->desconnect();
$impressora->verVersao();
?>
