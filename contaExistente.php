<!DOCTYPE html>

<link href="contaExistente.css" rel="stylesheet" type="text/css" />

<script src="contaExistente.js"> </script>  

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de usuário</title>
</head>
<body id="corpoBody">
    <a id="backToLoginPage" href="cadastrarConta.php"><p>←</p></a>
    <div id="blackBox">
        <h1 id="firstTitle">Entrar</h1>
            <form  action="testeLogin.php" method="POST">
    
                <input class="input" type="email" placeholder="Email já cadastrado" name="emailUsuario" id="emailUsuario" required>
                <br><br>
                <input class="input" type="password" placeholder="Senha já cadastrada" name="senhaUsuario" id="senhaUsuario" required>
                <br><br>
                <button class="input" name="submit" id="submit" onclick="pegaValores()">Enviar</button>
            </form>
    </div>
    <script src="cadastrarContas.js"> </script> 
</body>
</html>