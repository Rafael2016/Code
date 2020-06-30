<?php
interface IUsb{
    const version = "1.0";
    
    public function connect();
    public function desconnect();
    public function verVersao();
}
?>
