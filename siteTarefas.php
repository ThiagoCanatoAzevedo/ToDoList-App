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

    $logado = addslashes($_SESSION['emailUsuario']);

    if(isset($_POST['submitTasks'])){
        
        $tasks = $_POST['entrada_valores'];
        $result = mysqli_query($conexao, "INSERT INTO dados_usuario (tarefas) 
        VALUES ('$tasks')");
    }

//Salvar todas as tarefas em um array e depois adicionar esse array no BD

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo list</title>
</head>
<body id="corpoBody">

    <input type="checkbox" id="check">
        <label for="check" id="icone"><img id="openCloseBar" src="download-removebg-preview.png"/></label>
        <div class="barra">	
            <nav>
                <a href=""><div class="link">Hoje</div></a>
                <a href=""><div class="link">Em breve</div></a>
                <a href=""><div class="link">Projetos</div></a>
                
            </nav>	
        </div>
        
    
    <form method="POST">
        <button name='logoff' id='logoff'>Sair</button>
    </form>

    <form method="POST">
        <div id="writeActivities">

        <center><h2 id="h2"> Hoje: </h2>
        <br/>
        <center><input type="text" id="inputActivities" name="entrada_valores" placeholder="Tarefa" required></center>
        <br>
        <p id="informations"> </p>
        <br>
        <button type="submit" id="submitTasks" name="submitTasks">Salvar tarefa</button>
            
        <div id="valuesList" name="valuesList" class="container">
        
            <b>
                <ul name="list" id="list">

    </form>

    <link href="siteTarefas.css" rel="stylesheet" type="text/css" />
    <script src="siteTarefas.js"> </script>      
        

    </div>

</body>
    
</html>

