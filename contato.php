<?php

$servername = "Localhost";
$username   = "root";
$password   = "somentesenha";
$datebase   = "projetoeletro";

$conn = mysqli_connect($servername, $username, $password, $datebase);

if (!$conn){
    die("A conexão falhou".mysqli_connect_error());
}

if(isset($_POST['nome'])&& isset($_POST['idade'])&& isset($_POST['email'])&& isset($_POST['genero'])&& isset($_POST['Mensagem'])){

    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $email=$_POST['email'];
    $genero=$_POST['genero'];
    $Mensagem=$_POST['Mensagem'];
    
    $sql="insert into contato (nome,idade,email,genero,Mensagem) values ('$nome','$idade','$email','$genero','$Mensagem')";
    $result=$conn->query($sql);
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
    <main>
    <center>
   <table>
       <form method="post" name='infos' action="">
        <tr>
            <td><label type="text" for="nome">Nome: </label></td>
            <td><input type="text" name="nome" id="nome" required><br></td>
        </tr>
        <tr>
            <td><label type="number" for="idade">Idade: </label></td>
            <td><input type="number" name="idade" id="idade" required><br></td>
        </tr>
        <tr>
            <td><label for="email">E-mail: </label></td>
            <td><input type="email" name="email" id="email" required><br></td>
        </tr>
        <tr>
            <td><label for="masculino">Masculino</label></td>
            <td><input type="radio" name="genero" id="masculino" value="masculino"></td>
        </tr>
        <tr>
            <td><label for="feminino">Feminino</label></td>
            <td><input type="radio" name="genero" id="feminino" value="feminino"></td>
        </tr>
        <tr>
            <td><label for="outro">Outro</label></td>
            <td><input type="radio" name="genero" id="outro" value="outro"></td>
        </tr>
        <tr>
            <td><label for="Mensagem">Mensagem: </label></td>
            <td><textarea name="Mensagem" id="descricao" cols="30" rows="10" required></textarea></td>
            <td><button type="submit" name="submit" value="Enviar">Enviar</button></td>
        </tr>
       </form>
   </table>
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