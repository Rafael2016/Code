<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Exemplo Banco</h1>
        <form method="POST" action="operacao.php">
            Tipo de Conta: 
            <select name="cbTipo">
                <option value="1">Conta Corrente</option>
                <option value="2">Conta Poupança</option>
                <option value="3">Conta Salário</option>
            </select>
            <br/>
            Valor:<input type="text" name="txtValor"/>
            <br/>
            Cheque:<input type="text" name="txtCheque"/>
            <br/>
            <input type="submit" value="OK"/>
        </form>
    </body>
</html>


