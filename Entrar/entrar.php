<?php

    session_set_cookie_params(['httponly' => true]);

    $dados = $_POST;

    include_once "../Banco_de_Dados/conexao.php";

    if(empty($dados['email'])){
        $retorna = ['status' => false,'problema'=> 'email', 'msg' => "<h1 class='msg' style='color: #b21f1f'>Insira um Email</h1>"];
    }elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $retorna = ['status' => false,'problema'=> 'email', 'msg' => "<h1 class='msg' style='color: #b21f1f'>Insira um Email Valido</h1>"];
    }elseif(empty($dados['senha'])){
        $retorna = ['status' => false,'problema'=> 'senha', 'msg' => "<h1 class='msg' style='color: #b21f1f'>Insira uma Senha</h1>"];
    }else{
        
            $search = $conexão->prepare("SELECT * FROM usuarios WHERE Email_usuario = :Email");
    
            $search->bindParam(':Email',$dados['email']);
            
            $search->execute();

            if ($search->rowCount() == 0) {
                $retorna = ['status'=> false, 'msg'=> "<h1 class='msg' style='color: #b21f1f'>Email não vinculado com uma conta</h1>"];
            }
            else{
                $search = $conexão->prepare("SELECT * FROM usuarios WHERE Email_usuario = :Email AND Senha_usuario = :senha");
    
                $search->bindParam(':Email',$dados['email']);
                $search->bindParam(':senha',$dados['senha']);
                
                $search->execute();

            if ($search->rowCount() == 0) {
                $retorna = ['status'=> false, 'msg'=> "<h1 class='msg' style='color: #b21f1f'>Senha não coicide com a conta</h1>"];
            }else{

                if(isset($_POST['manterlogin'])){
                    $_SESSION["time"] = 90;
                }else{
                    $_SESSION["time"] = 1;
                }

                include_once('../Controle/controle_usuario.php');

                $retorna = ['status'=> true, 'msg'=> "Bem VINDO!"];

                $dados = $search->fetch(PDO::FETCH_ASSOC);

                $_SESSION["Nome_Usuario"] = $dados['Nome_Usuario'];
                $_SESSION['Email_Usuario'] = $dados['Email_Usuario'];
                
            }
        }
    }

    header('Content-Type: application/json');
    echo json_encode($retorna);
?>

