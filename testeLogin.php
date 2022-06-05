<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['emailUsuario']) && !empty($_POST['senhaUsuario'])){
        include_once('config.php');

        $nome = $_POST['nomeUsuario'];
        $email = $_POST['emailUsuario'];
        $senha = $_POST['senhaUsuario']; //-> Senha digitada pelo usuário

        $sql = "SELECT * FROM dados_usuario WHERE email='$email' LIMIT 1 "; //--> Colocar email aqui

        $result = $conexao->query($sql); 

        $user = $result->fetch_assoc(); //-> Senha que está no banco

        if(mysqli_num_rows($result) < 1){
            unset($email);
            unset($senha);

            header('Location:cadastrarConta.php');
        }

        elseif (password_verify($senha, $user['senha'])){
            $_SESSION['emailUsuario'] = $email;
            $_SESSION['senhaUsuario'] = $senha;

            header('Location:siteTarefas.php');
        }

        else{
            unset($email);
            unset($senha);
            header('Location:cadastrarConta.php');
        }
    }
        
    else{
        header('Location: cadastrarConta.php');
    }
    


?>