<?php
    

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    include_once "../Banco_de_Dados/conexao.php";


    if(empty($dados['email']) || !filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $retorna = ['status' => false, 'msg' => "Insira um Email"];
    }elseif(empty($dados['senha']) || strlen($dados['senha']) < 8 || strlen($dados['senha']) > 20){
        $retorna = ['status' => false, 'msg' => "Insira uma Senha"];
    }else{
        
            $search = $conexão->prepare("SELECT * FROM usuarios WHERE Email_usuario = :Email");
    
            $search->bindParam(':Email',$dados['email']);
            
            $search->execute();

            if ($search->rowCount() == 0) {
                $retorna = ['status'=> false, 'msg'=> "Email não vinculado com uma conta, deseja fazer um cadastro?"];
            }
        }
?>