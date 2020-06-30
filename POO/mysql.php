<?php
class Mysql implements IDB, IServer{
    public function connect(){
        echo "Conectando ao MySQL!";
    }
    
    public function desconnect(){
        echo "Desconectando do MySQL!";
    }
    
    public function query($SQL){
        echo "Executando comando SQL no MySQL ".$SQL;
    }
    
    public function ping($ip){
        echo "Ping no MySQL ".$ip;
    }
}
?>
