<?php 

    if(isset($_POST['submit'])){
        include_once('config.php');

        $nome = $_POST['nomeUsuario'];
        $email = $_POST['emailUsuario'];
        $senha = $_POST['senhaUsuario'];

        $result = mysqli_query($conexao, "INSERT INTO dados_usuario (nome,email, senha) 
        VALUES ('$nome', '$email', '$senha')");

        echo $nome;
    };

?>


<!DOCTYPE html>

<link href="cadastrarConta.css" rel="stylesheet" type="text/css" /> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body>

    <div>
        <h1>Cadastrar-se</h1>
            <form action="cadastrarConta.php" method="POST">
                <input class="input" type="text" placeholder="Nome" name="nomeUsuario" id="nomeUsuario" required>
                <br><br>
                <input class="input" type="email" placeholder="Email" name="emailUsuario" id="emailUsuario" required>
                <br><br>
                <input class="input" type="password" placeholder="Senha" name="senhaUsuario" id="senhaUsuario" required>
                <br><br>
                <button class="input" name="submit" id="submit" onclick="pegaValores()">Enviar</button>
                <br><br>
                <a id="buttonUserAlreadyRegistered"href="contaExistente.php"><p name="buttonUserAlreadyRegistered" id="buttonUserAlreadyRegistered">Já tenho uma conta</p>
            </form>

    </div>
</body>
</html>
