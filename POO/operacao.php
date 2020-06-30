<?php
    $valor = $_POST["txtValor"];
    
    $conta = null;
    
    if($_POST["cbTipo"] == 1){
        include("ContaCorrente.php");
        $conta = new ContaCorrente();
    } else if($_POST["cbTipo"] == 2){
        include("ContaPoupanca.php");
        $conta = new ContaPoupanca();
    } else if($_POST["cbTipo"] == 3){
        include("ContaSalario.php");
        $conta = new ContaSalario();
    }
    
    if($_POST["txtCheque"] != ""){
        if($conta instanceof ContaCorrente){
            $conta->emitirCheque($_POST["txtCheque"]);
            echo "<br>";
        }
    }
    
    $conta->depositar($valor);
    echo $conta->verSaldo();
    echo "<br/>";
    $conta->sacar(10);
    echo $conta->verSaldo();
?>