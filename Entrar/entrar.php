<?php
    
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    include_once "../Banco_de_Dados/conexao.php";

    if(empty($dados['email'])){
        $retorna = ['status' => false, 'msg' => "Insira um Email"];
    }elseif(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $retorna = ['status' => false, 'msg' => "Insira um Email Valido"];
    }elseif(empty($dados['senha'])){
        $retorna = ['status' => false, 'msg' => "Insira uma Senha"];
    }else{
        
            $search = $conexão->prepare("SELECT * FROM usuarios WHERE Email_usuario = :Email");
    
            $search->bindParam(':Email',$dados['email']);
            
            $search->execute();

            if ($search->rowCount() == 0) {
                $retorna = ['status'=> false, 'msg'=> "Email não vinculado com uma conta, deseja fazer um cadastro?"];
            }
            else{
                $search = $conexão->prepare("SELECT * FROM usuarios WHERE Email_usuario = :Email AND Senha_usuario = :senha");
    
                $search->bindParam(':Email',$dados['email']);
                $search->bindParam(':senha',$dados['senha']);
                
                $search->execute();

            if ($search->rowCount() == 0) {
                $retorna = ['status'=> false, 'msg'=> "Senha Incorreta !"];
            }else{
                $retorna = ['status'=> true, 'msg'=> "Bem VINDO!"];
            }
        }
    }

    header('Content-Type: application/json');
    echo json_encode($retorna);
?>

