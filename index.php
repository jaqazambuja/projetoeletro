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
    <title>Eletrô</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body style="background-color: #672369;">

<header class="bg-warning">
</header> 


    <div class="container">
        <div class="logo">
                    <a href="index.php"><img src="./img/eletro_logo.png" alt="logo loja eletrô" height="80px"></a>
                </div>
                <div class="redes-sociais">
                    <a href="contato.php"><img src="./img/redes_sociais.png" alt="logos das redes sociais" height="60px"></a>
                </div>
                <div class="header2">
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="lojas.php">Lojas</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
            <div class="pesquisa">
                <input placeholder="Pesquise aqui" type="text">
            </div>
            </div>
            </div>
<br><br><br>
        <center>
        <div class="apresent">
        <p>Eletrô surgiu em 2049 para trazer aos amantes da nostalgia um gostinho das tecnologias de décadas passadas.<br>

            Inspirados nas tecnologias mais revolucionárias de sua época, trazemos ao público mais saudosista uma experência que transcende o tempo!
            </p>
        </div>
        </center>

    <br><br><br><br><br><br><br><br>
<center>
<footer id="rodape">
    <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
    <img src="https://cdn.awsli.com.br/740/740718/arquivos/logos-forma-pagamento.png" 
    alt="Formas de pagamento" height="20%" width="20%">
    <p>© Eletrô</p>
</footer>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>