<?php

include("Writer.php");

$writer = new Writer();

echo "<b>".$writer->writeNow("Hello!")."</b><br/>";
echo $writer->somar(10,10);
?>
