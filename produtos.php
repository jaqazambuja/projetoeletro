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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/produtos.css">
    <script src="./js/script.js"></script>
</head>

<body class="corpo">
    <header class="cabecalho-principal">
            <div class="primeiro-cabecalho">
                <div class="logo">
                    <a href="index.php"><img src="./img/eletro_logo.png" alt="logo loja eletrô" height="80px"></a>
                </div>
                <div class="redes-sociais">
                    <a href="contato.php"><img src="./img/redes_sociais.png" alt="logos das redes sociais" height="60px"></a>
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
    <main id="produtos">
        <div class="container">
            <ul id="lista">
                <h3 class="text-success">Categorias</h3>
                <li onclick="exibir_todos()">Todos (9)</li>
                <li onclick="exibir_categoria('televisores')">Televisores (3)</li>
                <li onclick="exibir_categoria('consoles')">Consoles (3)</li>
                <li onclick="exibir_categoria('aparelhosdesom')">Aparelhos de som (1)</li>
                <li onclick="exibir_categoria('aparelhosdedvd')">Aparelhos de dvd (1)</li>
                <li onclick="exibir_categoria('consoleportatil')">Console portátil (1)</li>
            </ul>
        </div>
        <section>
            <?php
            $sql="Select * from produtos";
                    $result=$conn->query($sql);
            
                    if($result->num_rows>0){
                        while($rows=$result->fetch_assoc()){
            ?>
                <div class="container" id="<?php echo $rows["nome"];?>"  style="display: inline-block; padding: 20px;">
                                <img id="ofertas" src="..<?php echo $rows["imagem"];?>" width="170px" onclick="destaque(this)">
                                <p class="ofertas"><?php echo $rows["descricao"];?></p>
                                <hr>
                                <p class="precode">De: R$<?php echo $rows["preco"];?></p>
                                <p class="preco">Por: R$<?php echo $rows["precofinal"];?></p>
                            </div>
            <?php
                        }
                    }else{
                        echo "Nenhum produto cadastrado";
                    }
            ?>



        </section>
    </main>
    <br><br><br><br><br>
    <center>
    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="https://cdn.awsli.com.br/740/740718/arquivos/logos-forma-pagamento.png" 
        alt="Formas de pagamento" height="20%" width="20%">
        <p>© Eletrô</p>
    </footer>
</center>
</body>

</html>