<?php

class Writer {
    
    public function writeNow($p1){
        $p1 = 0;
    }
    
     public function somar($v1, $v2){
         if($v1 == 0)
             return "Erro no valor1";
         else if($v2 == 0)
             return "Erro no valor2";
         else
            return $v1 + $v2;
    }
}
?>
