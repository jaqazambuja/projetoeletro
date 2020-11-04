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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body class="corpo">



    <header class="cabecalho-principal">
            <div class="primeiro-cabecalho">
                <div class="logo">
                    <a href="index.html"><img src="./img/eletro_logo.png" alt="logo loja eletrô" height="80px"></a>
                </div>
                <div class="redes-sociais">
                    <a href="contato.html"><img src="./img/redes_sociais.png" alt="logos das redes sociais" height="60px"></a>
                </div>
            </div>
    </header>
    <div class="menu_busca">
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
    <main>
        <div id="txtinicial">
        <p id="txt">Eletrô surgiu em 2049 para trazer aos amantes da nostalgia um gostinho das tecnologias de décadas passadas.<br>

            Inspirados nas tecnologias mais revolucionárias de sua época, trazemos ao público mais saudosista uma experência que transcende o tempo!
            </p>
        <div>
    </main>

    <br><br><br><br><br><br><br><br>
<footer id="rodape">
    <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
    <img src="https://cdn.awsli.com.br/740/740718/arquivos/logos-forma-pagamento.png" 
    alt="Formas de pagamento" height="20%" width="20%">
    <p>© Eletrô</p>
</footer>
</body>

</html>