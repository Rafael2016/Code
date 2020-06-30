<?php

include("IUsb.php");

class Impressora implements IUsb{
    
    public function connect(){
        echo "Conectando a impressora!";
    }
    
    public function desconnect(){
         echo "Desconectando da impressora!";
    }
    
    public function verVersao(){
         echo "Versão ".self::version;
    }
}
?>
