<?php
class NewConta{
    private $numero;
    private $agencia;
    private $saldo = 0;
    
    public function __construct($numero, $agencia){
        $this->numero = $numero;
        $this->agencia = $agencia;
        echo "Saldo = ".$this->saldo;
        $this->open();
    }
    
    public function __destruct(){
        $this->close();
    }
    
    public function close(){
        echo "Fechou conexão!";
    }
    
    public function open(){
        echo "Abriu conexão!";
    }


    public function setNumero($numero){
        $this->numero = $numero;
    }
    
    public function setAgencia($agencia){
        $this->numero = $agencia;
    }
    
    public function getAgencia(){
       return $this->agencia;
    }
    
    public function getNumero(){
       return $this->numero;
    }
    
    public function depositar($valor){
        $this->saldo += $valor;
    }
    
    public function sacar($valor){
        $this->saldo -= $valor;
    }
}
?>
