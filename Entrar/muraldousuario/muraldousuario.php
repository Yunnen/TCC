<?php

  include('../../Controle/controle_usuario.php');

?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo_usuario.css" media="screen"/>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../IMG/Novo Projeto2.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Seu Perfil | Jovemp</title>
    <script src="https://kit.fontawesome.com/1c8b0a3809.js" crossorigin="anonymous"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="navbar">
    <div class="navgbarnav" id="navbar">
        <div class="navgbar">
          <a class="img" href="../../index.php"><img src="../../IMG/logo_meiolaranja.png"></a>
          <div class="dropsdown">
            <button class="dropsbtn">Empreendedorismo
              <i class="fa-solid fa-chevron-down"></i>
            </button>
            
            <div class="dropsdown-content" id="drop">
              <a href="Manutenção/manutencao.html">Curso Online - EAD</a>
              <a href="Manutenção/manutencao.html">Seu Negócio (MEI)</a>
            </div>
          </div>
  
          <div class="dropsdown">
            <button class="dropsbtn">Conteúdos
              <i class="fa-solid fa-chevron-down"></i>
            </button>
  
            <div class="dropsdown-content" id="drop1">
              <a href="Manutenção/manutencao.html">Artigos, Videos, Podcasts</a>
            </div>
          </div>
  
          <a href="Manutenção/manutencao.html"></i>Jovens Empreendedores</a>
  
          <!--<a href="Manutenção/manutencao.html">Blog</a> -->
  
          <img src= '../../<?php echo $foto?>'  onclick="MostrarInfos()" class="logado" id="logado">
          <div class="logadoifo" id="logadoinfo">
  
          <label class="item fotocomlogin"><img src='../../<?php echo $foto?>'class="fotologado">
          <nome> <?php echo $_SESSION['Nome_Usuario'] ?> </nome>
           <email class="email"> <?php echo $_SESSION['Email_Usuario'] ?> </email>
        </label>
  
          <a class="infosselect" href='#'>Meu mural </a>

          <a class="infosselect" href='Entrar/muraldousuario/muraldousuario.html'>Meu perfil</a>
  
          <a class="infosselect" href='Entrar/muraldousuario/muraldousuario.html'>Alterar Senha</a>
  
          <button class="item" onclick="deslogar()">Sair</button>
  
          </div>
  
        </div>
      </div>
    </div>   
  </div>
      
          </div>
      </div>
</div>

    <section class="mural">
    <div class="session">
        <div class="fotonome">
            <label class="fotoperfil">
                <img src="../../<?php echo $foto?>">
            </label>
               <nome><?php echo $_SESSION['Nome_Usuario'] ?></nome>
               <email><?php echo $_SESSION['Email_Usuario'] ?></email>
      </div>
        <a class='item active' href="#"><i class="fa-solid fa-user"></i>Minha conta</a>
        <a class='item' href="#"><i class="fa-solid fa-book"></i>Meu Curso em andamento</a>
        <a class='item' href="#"><i class="fa-solid fa-graduation-cap"></i>Meu Certificado EAD</a>
        <label class='laranjinha'></label>
        <a class='item' href="../../index.php"><i class="fa-solid fa-headset"></i>Suporte</a>
      </div>
    </div>

    <div class="conteudo">
        
    </div>
    </section>


</body>
</html>
<script src="custom.js"></script>
<script>
 console.log('<?php echo $_SESSION["Nome_Usuario"] ?>');

 $('#Entrar').css('display','none');

 $('#logado').css('display','block');
 
</script>
