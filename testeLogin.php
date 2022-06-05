<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['emailUsuario']) && !empty($_POST['senhaUsuario'])){
        include_once('config.php');

        $email = $_POST['emailUsuario'];
        $senha = $_POST['senhaUsuario'];

        $sql = "SELECT * FROM dados_usuario WHERE email='$email' and senha='$senha' ";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['emailUsuario']);
            unset($_SESSION['senhaUsuario']);
            
            header('Location:cadastrarConta.php');
        }
        else{
            $_SESSION['emailUsuario'] = $email;
            $_SESSION['senhaUsuario'] = $senha;

            header('Location: siteTarefas.php');
        }

    }
    else{
        header('Location: cadastrarConta.php');
    }

?>
