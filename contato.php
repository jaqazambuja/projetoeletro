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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="corpo">
    <?php
include('menubusca.html')

    ?>
    <br><br><br><br>
   <div style="width: 30%">
        <form method="post" name='infos' action="">
        <div class="form-group">
            <label type="text" for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Seu nome aqui" class="form-control" required><br>
        </div>
        <div class="form-group">
            <label type="number" for="idade">Idade: </label>
            <input type="number" name="idade" id="idade" placeholder="Sua idade aqui" class="form-control" required><br>
        </div>
        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Seu email" required> <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguem.</small><br>
        </div>
        <div class="form-group"> 
            <label for="masculino">Masculino</label></td>
            <input type="radio" name="genero" id="masculino" value="masculino"></td>
        </div>
        <div class="form-group">
            <label for="feminino">Feminino</label>
            <input type="radio" name="genero" id="feminino" value="feminino">
        </div>
        <div class="form-group">
            <label for="outro">Outro</label>
            <input type="radio" name="genero" id="outro" value="outro">
        </div>
            <div class="form-group">
                <label for="Mensagem">Mensagem: </label>
            </div>
            <div class="form-group"><textarea name="Mensagem" id="descricao" cols="30" rows="10" required></textarea></div>
            <button type="submit" name="submit" value="Enviar" class="btn btn-primary btn-lg">Enviar</button>
   </form>
</div>
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