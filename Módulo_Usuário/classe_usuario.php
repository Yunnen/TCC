<?php

class usuario
{
    private $email;
    private $nome;
    private $senha;

    public function setEmail($cod)
    {
        $this->email = $cod;
    }
    public function setNome($cod)
    {
        $this->nome = $cod;
    }
    public function setSenha($cod)
    {
        $this->senha = $cod;
    }

   public function inserir()
   {
    include_once "./conexao.php";

    try{
        $comando = $conexão->prepare("
        
        INSERT INTO usuarios
        (Nome_Usuario,Senha_usuario,Email_usuario)
        VALUES ( :Usuario, :Senha, :Email)");
        
        $comando->bindParam(':Usuario', $this->nome);
        $comando->bindParam(':Senha', $this->senha);
        $comando->bindParam(':Email', $this->email);

        if($comando->execute()){
            $retorno = "Salvo com Sucesso";
        }
    } catch (PDOException $erro){
        $retorno = "Erro ao salvar ". $erro->getMessage();
    }
    return $retorno;
   }
   
}