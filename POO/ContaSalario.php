<?php
include("Conta.php");

final class ContaSalario extends Conta{
    
    public function sacar($valor){
        $this->saldo -= $valor;
        $this->saldo -= 1;
    }
    
    public function exemplo(){
        
    }
}
?>
