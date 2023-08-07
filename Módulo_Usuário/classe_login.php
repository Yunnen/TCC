<?php
// Configurações
$limiteTentativas = 3; // Número máximo de tentativas de senha incorretas permitidas
$tempoBloqueio = 60; // Tempo de bloqueio em segundos

// Verifica se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['email_cad']) && isset($_GET['senha_login'])) {

    $username = filter_input(INPUT_GET,'email_cad');
    $password = filter_input(INPUT_GET,'senha_login');

    // Verifica as credenciais do usuário (você deve implementar a lógica de verificação)
    $credenciaisValidas = verificarCredenciais($username, $password);

    // Obtém o endereço IP do usuário
    $enderecoIP = $_SERVER['REMOTE_ADDR'];

    // Verifica se o usuário está temporariamente bloqueado
    if (isBloqueado($enderecoIP)) {
        // Usuário bloqueado, exibe uma mensagem de erro
        echo "Sua conta está temporariamente bloqueada. Tente novamente mais tarde.";
    } else {
        // Verifica se as credenciais são válidas
        if ($credenciaisValidas) {
            // Limpa as tentativas de login anteriores do usuário
            limparTentativasLogin($enderecoIP);

            // Realiza o login bem-sucedido
            realizarLogin($username);
        } else {
            // Registra a tentativa de login mal-sucedida
            registrarTentativaLogin($enderecoIP);

            // Verifica se o usuário atingiu o limite de tentativas
            if (atingiuLimiteTentativas($enderecoIP, $limiteTentativas)) {
                // Define o tempo de desbloqueio
                $tempoDesbloqueio = time() + $tempoBloqueio;

                // Atualiza o tempo de desbloqueio na tabela de bloqueio
                atualizarTempoDesbloqueio($enderecoIP, $tempoDesbloqueio);

                // Exibe uma mensagem informando o bloqueio
                echo "Você atingiu o limite de tentativas de login. Sua conta está temporariamente bloqueada.";
            } else {
                // Credenciais inválidas, exibe uma mensagem de erro
                echo "Usuário ou senha incorretos.";
            }
        }
    }
}

// Função para verificar as credenciais do usuário
function verificarCredenciais($email, $password)
{
    include "conexao.php";
    
    $comando = $conexão->prepare("
        
    SELECT * FROM usuarios WHERE Email_usuario = :Email and Senha_usuario = :Senha");
    
    $comando->bindParam(':Senha', $password);
    $comando->bindParam(':Email', $email);
    $comando->execute();
    
    if($comando->rowCount() > 0) {
        $retorno = true;
    }else{
        $retorno = false;
    }
    // Implemente a lógica para verificar as credenciais do usuário aqui
    // Retorne true se as credenciais forem válidas, ou false caso contrário
    return $retorno;
}

// Função para verificar se o usuário está bloqueado
function isBloqueado($enderecoIP)
{
       // Faça a conexão com o banco de dados ou inclua o arquivo com a conexão
       include "conexao.php";

       try {
           $comando = $conexão->prepare("SELECT tempo_desbloqueio FROM tabela_bloqueio WHERE endereco_ip = :endereco_ip");
           $comando->bindParam(':endereco_ip', $enderecoIP);
           $comando->execute();
   
           if ($comando->rowCount() > 0) {
               $row = $comando->fetch(PDO::FETCH_ASSOC);
               $tempoDesbloqueio = $row['tempo_desbloqueio'];
   
               // Verifica se o tempo de desbloqueio é posterior ao momento atual
               if ($tempoDesbloqueio > time()) {
                   return true; // Usuário está bloqueado
               }
           }
       } catch (PDOException $e) {
           echo "Erro: " . $e->getMessage();
       }
   
       return false; // Usuário não está bloqueado
}

// Função para limpar as tentativas de login anteriores do usuário
function limparTentativasLogin($enderecoIP)
{
       // Faça a conexão com o banco de dados ou inclua o arquivo com a conexão
       include "conexao.php";

       try {
           $stmt = $conexão->prepare("DELETE FROM tabela_tentativas WHERE endereco_ip = :endereco_ip;");
           $stmt->bindParam(':endereco_ip', $enderecoIP);
           $stmt->execute();
   
           return true; // Limpeza das tentativas de login realizada com sucesso
       } catch (PDOException $e) {
           echo "Erro: " . $e->getMessage();
           return false; // Erro ao limpar as tentativas de login
       }
    // Implemente a lógica para limpar as tentativas de login anteriores do usuário
}

// Função para registrar uma tentativa de login mal-sucedida
function registrarTentativaLogin($enderecoIP)
{
        // Faça a conexão com o banco de dados ou inclua o arquivo com a conexão
        include "conexao.php";

        try {
            $query = "INSERT INTO tabela_tentativas (endereco_ip, data_tentativa) VALUES (:endereco_ip, NOW())";
            $stmt = $conexão->prepare($query);
            $stmt->bindParam(':endereco_ip', $enderecoIP);
            $stmt->execute();
    
            return true; // Registro da tentativa de login realizado com sucesso
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return false; // Erro ao registrar a tentativa de login
        }
    // Implemente a lógica para registrar uma tentativa de login mal-sucedida na tabela de tentativas de login
}

// Função para verificar se o usuário atingiu o limite de tentativas
function atingiuLimiteTentativas($enderecoIP, $limiteTentativas)
{
      // Faça a conexão com o banco de dados ou inclua o arquivo com a conexão
      include "conexao.php";

      try {
          $query = "SELECT COUNT(*) as total FROM tabela_tentativas WHERE endereco_ip = :endereco_ip";
          $stmt = $conexão->prepare($query);
          $stmt->bindParam(':endereco_ip', $enderecoIP);
          $stmt->execute();
  
          $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
          $totalTentativas = $resultado['total'];
  
          if ($totalTentativas >= $limiteTentativas) {
              return true; // Usuário atingiu o limite de tentativas de login
          } else {
              return false; // Usuário ainda não atingiu o limite de tentativas de login
          }
      } catch (PDOException $e) {
          echo "Erro: " . $e->getMessage();
          return false; // Erro ao verificar o limite de tentativas de login
      }
}

// Função para atualizar o tempo de desbloqueio na tabela de bloqueio
function atualizarTempoDesbloqueio($enderecoIP, $tempoDesbloqueio)
{
   // Faça a conexão com o banco de dados ou inclua o arquivo com a conexão
   include "conexao.php";

   try {
       $stmt = $conexão->prepare("UPDATE tabela_bloqueio SET tempo_desbloqueio = :tempo_desbloqueio WHERE endereco_ip = :endereco_ip");
       $stmt->bindParam(':tempo_desbloqueio', $tempoDesbloqueio);
       $stmt->bindParam(':endereco_ip', $enderecoIP);
       $stmt->execute();

       // Verifica se o número de linhas afetadas foi maior que zero para confirmar a atualização
       if ($stmt->rowCount() > 0) {
           return true; // Tempo de desbloqueio atualizado com sucesso
       } else {
           return false; // Falha ao atualizar o tempo de desbloqueio
       }
   } catch (PDOException $e) {
       echo "Erro: " . $e->getMessage();
       return false; // Erro ao atualizar o tempo de desbloqueio
   }
}

// Função para realizar o login bem-sucedido
function realizarLogin($username)
{
    echo $username;
}
?>
