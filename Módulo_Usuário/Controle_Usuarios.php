<?php

    include_once "./classe_usuario.php";

    $Class = new usuario();

    $usuario = filter_input(INPUT_GET,"nome_cad",FILTER_SANITIZE_SPECIAL_CHARS);

    $email = filter_input(INPUT_GET,"email_cad",FILTER_SANITIZE_SPECIAL_CHARS);

    $senha = filter_input(INPUT_GET,"senha_cad",FILTER_SANITIZE_SPECIAL_CHARS);


    $Class->setNome($usuario);
    $Class->setEmail($email);
    $Class->setSenha($senha);

    if(isset($_GET["cadastrar"])){

        echo $Class->inserir();
    }else{
        echo "CARALHO";
    }
    
?>


