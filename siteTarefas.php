

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo list</title>
</head>
<body>
    <center><h1>ToDo List: Organize o seu dia!</h1></center>
    
    <form method="POST">
        <button name='logoff' id='logoff'>Sair</button>
    </form>
    
        <div id="adicionaAtividades">

        <h2>Quantidade de tarefas (Hoje): </h2>
        
        <center><input type="text" id="inputEntradaValores" name="entrada_valores" placeholder="Tarefa" required></center>
        <br>
        <p id="dados"> </p>
            
        <div class="container">
        
            <b><ul id="lista" >
        
        <link href="siteTarefas.css" rel="stylesheet" type="text/css" />
        
        <script src="siteTarefas.js"></script>  

    </div>

</body>
    
</html>

<?php
    include_once('config.php');

    session_start();

    if((!isset($_SESSION['emailUsuario']) == true) and (!isset($_SESSION['senhaUsuario'])== true)){
        unset($_SESSION['emailUsuario']);
        unset($_SESSION['senhaUsuario']);
        
        header('Location: cadastrarConta.php');
    }

    if(isset($_POST['logoff'])){
        unset($_SESSION['emailUsuario']);
        unset($_SESSION['senhaUsuario']);

        header ('Location: contaExistente.php');
    }

    $logado = $_SESSION['emailUsuario'];


    

?>