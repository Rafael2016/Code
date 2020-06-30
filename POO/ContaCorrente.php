<?php
include("Conta.php");

final class ContaCorrente extends Conta{
    
    public function sacar($valor){
        $this->saldo -= $valor;
        $this->saldo -= 1;
    }
    
    // Override (Reescrita)
    public function juros(){
       echo $this->saldo - 1;
   }
   
   public function emitirCheque($quantidade){
       echo "Cheque enviado, total: ".$quantidade;
   }
}
?>
