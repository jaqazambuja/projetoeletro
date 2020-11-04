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
    <script src="./js/script.js"></script>
</head>

<body class="corpo">
    <header class="cabecalho-principal">
        <?php
            include('menubusca.html')

        ?>  

    </header>    
    <main id="produtos">
        <div id="categorias">
            <h3>Categorias</h3>
            <ul id="lista">
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
                <div class="box-produtos" id="<?php echo $rows["nome"];?>"  style="display: block;">
                                <img class="pictureProduct"src="..<?php echo $rows["imagem"];?>" width="170px" onclick="destaque(this)">
                                <p class="nomeAparelho"><?php echo $rows["descricao"];?></p>
                                <hr>
                                <p class="priceFrom">De: R$<?php echo $rows["preco"];?></p>
                                <p class="priceTo">Por: R$<?php echo $rows["precofinal"];?></p>
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
    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="https://cdn.awsli.com.br/740/740718/arquivos/logos-forma-pagamento.png" 
        alt="Formas de pagamento" height="20%" width="20%">
        <p>© Eletrô</p>
    </footer>
</body>

</html>