<?php 

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = addslashes($_POST['nomeUsuario']);
        $email = addslashes($_POST['emailUsuario']);
        $senha = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT);

        $query = mysqli_query($conexao, "SELECT * FROM dados_usuario WHERE nome='$nome'");

        if(mysqli_num_rows($query) > 0){ 
            
            echo ('a');
            echo "<center><p id='userExistent'>Essa conta já existe!</p>";
            unset($_POST['nomeUsuario']);
            unset($_POST['emailUsuario']);
            unset($_POST['senhaUsuario']);
    
        }else{
            echo "Usuário cadastrado";
            $result = mysqli_query($conexao, "INSERT INTO dados_usuario (nome,email, senha) 
            VALUES ('$nome', '$email', '$senha')");
        }

    };

?>

<!DOCTYPE html>

<link href="cadastrarConta.css" rel="stylesheet" type="text/css" /> 
<script src="cadastrarContas.js"> </script>  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<body id="bodyCorpo">

    <div id="allInformations">
        <h1 id="firstTitle">Cadastrar-se</h1>
            <form action="cadastrarConta.php" method="POST">
                <input class="input" type="text" placeholder="Nome" name="nomeUsuario" id="nomeUsuario" required>
                
                <br><br>
                <input class="input" type="email" placeholder="Email" name="emailUsuario" id="emailUsuario" required>
                
                <br><br>
                <input class="input" type="password" placeholder="Senha" name="senhaUsuario" id="senhaUsuario"  required><input type="checkbox" id="mostrarSenha" onclick="mostrarOcultarSenha()"></input>
    
                
                <br><br>
                <button class="input" name="submit" id="submit">Enviar</button>
                
                <br><br>
                <a id="buttonUserAlreadyRegistered"href="contaExistente.php"><p name="buttonUserAlreadyRegistered" id="buttonUserAlreadyRegistered">Já tenho uma conta</p>
            </form>

    </div>
</body>
</html>