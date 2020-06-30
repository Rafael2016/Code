<?php
class Oracle implements IDB{
    public function connect(){
        echo "Conectando ao Oracle!";
    }
    
    public function desconnect(){
        echo "Desconectando do Oracle!";
    }
    
    public function query($SQL){
        echo "Executando comando SQL no Oracle ".$SQL;
    }
    
    public function ping($ip){
        echo "Ping no Oracle ".$ip;
    }
}
?>