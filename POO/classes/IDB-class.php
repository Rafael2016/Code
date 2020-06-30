<?php
interface IDB{
    public function connect();
    public function desconnect();
    public function query($SQL);
}
?>
