<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulário de contato</title>
    <link rel="sortcut icon" href="terra-do-planeta-3185935-removebg-preview (1).png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="CSS/EstiloLogin.css">
</head>
<body>
    <div class="bg_img"><img src="IMG/Fundo_Cores_trans.png"></div>
    <img class="imgzinha" src="IMG/Fundo_Img.png">
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <div class="content">      
      <div id="login">
        <form methodo="get" action="classe_login.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
          
          <p> 
            <label for="senha_login">Sua senha</label>
            <input  minlength="8" id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
          </p>
          
          <p> 
            <input type="submit" value="Logar"/> 
          </p>
          
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
            <a href="/Arquivos IMPORTANTES/Programação/TCC/index.html">Voltar</a>
          </p>
        </form>
      </div>

      <div id="cadastro">
        <form methodo="get" action="Controle_Usuarios.php"> 
          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" maxlength="35" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto"/>
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" maxlength="50" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input minlength="8" id="senha_cad" name="senha_cad"  required="required" type="password" placeholder="********"/>
          </p>
          
          <p> 
            <input type="submit" id="cadastrar" name="cadastrar" value="cadastrar">
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
            <a href="/Arquivos IMPORTANTES/Programação/TCC/index.html">Voltar</a>
          </p>
        </form>
      </div>
    </div>
  </div> 
<script src="JS/custom.js"></script>
</body>
</html>