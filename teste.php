<?php

    $senha = "12345";
    //$hash = password_hash($senha, PASSWORD_DEFAULT);

    //echo $hash;

    echo password_verify($senha,'$2y$10$eays2LB.Nae0bfpj87soveX3.XaMLaQLk60fUngYWSZR0qmU7c4ny');

?>