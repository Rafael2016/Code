<?php

include("SerVivo.php");

class Cachorro {

    private static $nome;
    
    public static function getNome(){
        return self::$nome;
    }
    
    public static function setNome($nome){
        self::$nome = $nome;
    }

    public static function latir() {
        return "Esta latindo..";
    }
    
    public static function getCount($var){
        return strlen($var);
    }
}
?>