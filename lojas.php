<?php

$servername = "Localhost";
$username   = "root";
$password   = "somentesenha";
$datebase   = "projetoeletro";

$conn = mysqli_connect($servername, $username, $password, $datebase);

if (!$conn){
    die("A conexão falhou".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Eletrô</title>
    <link rel="stylesheet" type="text/css" href="./css/loja.css">
</head>
    <body>
    <?php
include('menubusca.html')

    ?>
            
<br><br><br>
<main>
<div class="lugares">
    <div class="rjspsc">
        <h3>Rio de Janeiro</h3>
        <p><font face="Arial">Avenida Presidente Vargas, 5000</font></p>
        <p><font face="Arial">10 º andar</font></p>
        <p><font face="Arial">Centro</font></p>
        <p><font face="Arial">(21) 3333-3333</font></p>
    </div>
    <div class="rjspsc">
        <h3>São Paulo</h3>
        <p><font face="Arial">Avenida Paulista, 985</font></p>
        <p><font face="Arial">3 º andar</font></p>
        <p><font face="Arial">Jardins</font></p>
        <p><font face="Arial">(11) 4444-4444</font></p>
    </div>
    <div class="rjspsc">
        <h3>Santa Catarina</h3>
        <p><font face="Arial">Rua Major Ávila, 370</font></p>
        <p><font face="Arial">10 º andar</font></p>
        <p><font face="Arial">Vila Mariana</font></p>
        <p><font face="Arial">(47) 5555-5555</font></p>
    </div>
</div>
</main>
<br><br><br><br>
<br><br><br><br>
<footer id="rodape">
    <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
    <img src="https://cdn.awsli.com.br/740/740718/arquivos/logos-forma-pagamento.png" 
    alt="Formas de pagamento" height="20%" width="20%">
    <p>© Eletrô</p>
</footer>
</body>
</html>