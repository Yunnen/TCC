<?php
    

    $dados = filter_input_array;

    include_once "../Banco_de_Dados/conexao.php";


    if (empty($dados['nome']) || strlen($dados['nome']) < 3 || strlen($dados['nome']) > 40) {
        $retorna = ['status' => false, 'msg' => ""];
    }elseif(empty($dados['email']) || !filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
        $retorna = ['status' => false, 'msg' => ""];
    }elseif(empty($dados['senha']) || strlen($dados['senha']) < 8 || strlen($dados['senha']) > 20){
        $retorna = ['status' => false, 'msg' => ""];
    }elseif($dados['confirmar'] != $dados['senha']){
        $retorna = ['status' => false, 'msg' => ""];
    }else{
        


        $search = $conexão->prepare("SELECT * FROM usuarios WHERE Email_usuario = :Email");

        $search->bindParam(':Email',$dados['email']);
        
        $search->execute();


        if ($search->rowCount() == 0) {
    try{
        $comando = $conexão->prepare("
        
        INSERT INTO usuarios
        (Nome_Usuario,Senha_usuario,Email_usuario)
        VALUES ( :Usuario, :Senha, :Email)");
        
        $comando->bindParam(':Usuario', $dados['nome']);
        $comando->bindParam(':Senha', $dados['senha']);
        $comando->bindParam(':Email', $dados['email']);

        $comando->execute();

        $retorna = ['status' => true, 'msg' => ""];
    
    }catch (PDOException $e) {
    $retorna = ['status' => false, 'msg' => "<h1>Ocorreu um erro ao cadastrar: " . $e->getMessage() . "</h1>"];
    }
}else{$retorna = ['status' => false, 'msg' => "<h1 style='color: #b21f1f'><i class='fa-regular fa-circle-xmark'></i>Email já registrado</h1>"];}
}

    header('Content-Type: application/json');
    echo json_encode($retorna);
?>