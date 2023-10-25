<?php

include('Controle/controle_usuario.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head bg-body text-dark>
    
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
    <link rel="stylesheet" type="text/css" href="CSS/Estilo_Query.css" media="screen"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="shortcut icon" href="IMG/Novo Projeto2.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600&display=swap" rel="stylesheet">

    <title>JovemP</title>
    <script src="https://kit.fontawesome.com/1c8b0a3809.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </head>
<body>
    
    <script src="JS/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <div id="seu-href" class="posição"></div>

    <div class="navgbarnav" id="navbar">
      <div class="navgbar">
        <a class="img" href="#"><img src="IMG/logo_meiolaranja.png"></a>
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

        <a class="login" id="Entrar" href="Entrar/login.html">Entrar <i class="fa-solid fa-arrow-right-to-bracket"></i></a>

        <img src='<?php echo $foto ?>' onclick="MostrarInfos()" class="logado" id="logado">
        <div class="logadoifo" id="logadoinfo">

        <label class="item fotocomlogin"><img src='IMG/Pyra.png' class="fotologado">
        <nome> <?php echo $_SESSION['Nome_Usuario'] ?> </nome>
         <email class="email"> <?php echo $_SESSION['Email_Usuario'] ?> </email>
      </label>

        <a class="infosselect" href='Entrar/muraldousuario/muraldousuario.php'>Meu Mural</a>

        <a class="infosselect" href='Entrar/muraldousuario/muraldousuario.html'>Meu Perfil</a>

        <a class="infosselect" href='Entrar/muraldousuario/muraldousuario.html'>Alterar Senha</a>

        <button class="item" onclick="deslogar()">Sair</button>

        </div>

      </div>
    </div>
    </div>   
    </div>
    
        </div>
    </div>
 
    <div class="texto">
      <label class="textinho">Seu Sucesso.</label>
      <label class="textomaior">Alavanque seu negócio,<br> inove, e transforme sua<br> jornada empreendedora.</label>
      <label class="textinho">Conteúdos exclusivos e gratuitos para Jovens<br> empreendedores, impulsione seu negócio<br> navegando por nosso site.</label>
      <button class="saibamais">Saiba mais </button>
    </div>
    
    <div class="cards">
      <label>Auxiliamos você para grandes negócios</label>

      <div class="card">

        <span class="material-symbols-outlined">
          currency_exchange
        </span>
        <h2>INVISTA EM SEU APRENDIZADO</h2>
        <div class="laranjinha"></div>
        <p>Você vai ter acesso ilimitado ao curso de empreendedorismo, exclusivamente e <b>gratuitamente</b> pra você.</p> 

      </div>

      <div class="card">
        <span class="material-symbols-outlined">
          network_intelligence_history
          </span>
        <h2>APRENDA NO SEU TEMPO</h2>
        <div class="laranjinha"></div>
        <p>Assista de onde e quando quiser, profissionais qualificados, aulas gravadas e muitos conteúdos.</p> 
      </div>

      <div class="card">
        <span class="material-symbols-outlined">
          trending_up
          </span>
          <h2>IMPULSIONE SEUS NEGÓCIOS</h2>
          <div class="laranjinha"></div>
          <p>Na plataforma Jovemp, você adquire conhecimentos que farão você alavancar seus próprios negócios.</p>     
      </div>

      <div class="card">
        <span class="material-symbols-outlined">
          work
          </span>
        <h2>RECEBA O APOIO NECESSÁRIO</h2>
        <div class="laranjinha"></div>
        <p>A Jovemp fornecerá o suporte necessário para que você possa alcançar seus objetivos e prosperar no mundo dos negócios.</p>
    </div>
    

    </div>

    <div class="cardstexto">
      <label class="textomaior">A Jovemp está aqui para te ajudar</label>
      <label class="textinho">O curso possui 5 módulos, abrangendo os seguintes temas:</label>
    </div>


    <div class="cards2">
      <div class="card2 longo"></div>
      <div class="card2"><label>Gestão financeira</label></div> 
      <div class="card2"><label>Mercado</label></div>
      <div class="card2"><label>Empreendedorismo</label></div>
      <div class="card2 longo"></div>
      <div class="card2"><label>Marketing</label></div>
      <div class="card2"><label>Gestão estratégica</label></div>
      <div class="card2 longo"></div>
      <div class="card2 botão"><button onclick="acessarcursos()">Acessar Curso</button>
    </div>


    <div class="sobrenos">
      
      <div class="direta">
        <label class="fundadores">EQUIPE</label>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="99999">
              <img src="IMG/Sofyy.jpeg" class="d-block"  alt="...">
              <label class="nome">Fabiana Sofya</label>
              <label class="funcao">CEO e Designer</label>
            </div>
            <div class="carousel-item " data-bs-interval="99999">
              <img src="IMG/Guih.jpeg" class="d-block"  alt="...">
              <label class="nome">Guilherme G. Migliorin</label>
              <label class="funcao">Programador Full Stack</label>
            </div>
            <div class="carousel-item" data-bs-interval="99999">
              <img src="IMG/Caio.jpeg" class="d-block" alt="...">
              <label class="nome">Caio Viana</label>
              <label class="funcao">Arquivista e avaliador</label>
            </div>
            <div class="carousel-item" data-bs-interval="99999">
              <img src="IMG/Gio.jpeg" class="d-block" alt="...">
              <label class="nome">Giovanni A.</label>
              <label class="funcao">Analista de Sistemas</label>
            </div>
          </div>
          
          <button class="esquerda" id="esquerda" onclick="diminuirbotao()" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="material-symbols-outlined">
              arrow_back
              </span>
          </button>
          
          <button class="direita" id="direita"  onclick="somarbotão()" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="material-symbols-outlined">
              arrow_forward
              </span>
          </button>

        </div>
    </div>

      <div class="esquerda">
        <label class="titulo">Quem é a Jovemp?
          <label class="laranjinha"></label>
        </label>
        <label>Jovemp significa "Jovens Empreendedores", um projeto que presta apoia a carreira profissional de jovens que pensam em Empreender. Tendo como objetivo alavancar os negócios para quem quer ser um MEI(Microempreendedor Individual), ou para quem já é um empreendedor.
        </label>
         <label class="link"><a href="">Conheça ></a></label>
      </div>
    </div>
    
    <!--<div class="edfinanceira">
      <div class="esquerda">
        <img src="IMG/educacao.png">
      </div>
      <div class="direita">
        
        <div class="titulinho">
          <label class="laranjinha"></label>
            <label class="titulo">Educação Financeira

              <label class="textinho">Investindo no Futuro</label>
            </label>
          </div>
          
          <label class="texto">
            A Jovemp vem vindo com um programa essencial para o futuro dos Jovens Empreendedores, reconhecemos a importância da mesma na vida de cada um, com isso, abraçamos uma causa: <b>Educação Financeira nas Escolas</b>.    
          </label>

          <label class="texto">
            A educação financeira é uma das habilidades mais valiosas que podemos proporcionar aos nossos jovens. Assim como aprendem a ler e escrever, é fundamental que as crianças e adolescentes também adquiram conhecimentos sobre o mundo das finanças desde cedo. Nosso programa <b>"Educação Financeira: Investindo no Futuro"</b> tem como objetivo promover essa conscientização nas escolas, preparando nossos alunos para tomar decisões financeiras responsáveis e garantir um futuro financeiramente seguro.    
          </label>

          <label class="texto">
            Nosso programa funciona a partir de assinaturas, sem custo e prático. Precisamos da sua <b>assinatura</b> para nos ajudar a ir em frente com essa causa, pois, nosso projeto necessita do apoio de pessoas que querem um futuro melhor e promissor, como você, para prosseguir.    
          </label>

          <label class="texto">
            <button>Quero assinar</button>    
          </label>
          
      </div>

    </div>
-->
    <div class="blog"> 

      <label class="titulo">Artigos Jovemp</label>

      <label class="textinho">Os mais recentes</label>
      <label class="laranjinha"></label>

      <div class="noticias">
        
        <div class="carde">
          <label class="img" style='--img:url(../IMG/noti1.png)'><button class="like"><img src="icon_load_laranja.png"></button></label>
          <label class="tags">Planejamento</label>
          <label class="titulo"><a href= "">O que é PLR no marketing digital</a></label>
          <label class="descricao">PLR é a sigla para Direitos de Marca Própria ou Private Label Rights. São infoprodutos...</label>
          <label class="data">Outubro, 2023</label>
          <label class="salvar"><button><i class="fa-regular fa-bookmark"></i></button> Ler mais tarde</label>
        </div>

        <div class="carde">
          <label class="img" style='--img:url(../IMG/Blog1.png)'><button class="like"><img src="icon_load_laranja.png"></button></label>
          <label class="tags">Empreendedorismo</label>
          <label class="titulo"><a href= "">Como emitir a guia DAS-MEI</a></label>
          <label class="descricao">A principal obrigação do MEI é pagar a “mensalidade” do MEI todos os meses...</label>
          <label class="data">Outubro, 2023</label>
          <label class="salvar"><button><i class="fa-regular fa-bookmark"></i></button> Ler mais tarde</label>
        </div>

        <div class="carde">
          <label class="img" style='--img:url(../IMG/Blog2.png)'><button class="like"><img src="icon_load_laranja.png"></button></label>
          <label class="tags">Planejamento</label>
          <label class="titulo"><a href= "">MEI precisa de Inscrição Estadual?</a></label>
          <label class="descricao">Quem está em processo de formalização como Microempreendedor Individual (MEI)...</label>
          <label class="data">Outubro, 2023</label>
          <label class="salvar"><button><i class="fa-regular fa-bookmark"></i></button> Ler mais tarde</label>
        </div>

        <div class="carde">
          <label class="img" style='--img:url(../IMG/Blog3.png)'><button class="like"><img src="icon_load_laranja.png"></button></label> 
          <label class="tags">Empreendedorismo</label>
          <label class="titulo"><a href= "">MEI x Imposto de Renda </a></label>
          <label class="descricao">Todos os anos, quem é Microempreendedor Individual (MEI) fica com uma dúvida:...</label>
          <label class="data">Outubro, 2023</label>
          <label class="salvar"><button><i class="fa-regular fa-bookmark"></i></button> Ler mais tarde</label>
        </div>
      </div>

    </div>

    <div class="infos">
      <label class="titulo">Quer <laranja>entrar em contato?</laranja></label>
      <label class="laranjinha"></label>
      <label class="textinho">Gostaríamos muito de ouvir você. Veja como nos contatar.</label>

      <div class="contato">
        <div class="contatos">
          <button><a href="https://wa.me/11930981983" target="_blank"><img src="IMG/whatsapp.png"></a></button>
          <label class="informacao">(11) 93098-1983</label>
        </div>

        <div class="contatos">
          <button><a href="https://www.instagram.com/jovemp2023/" target="_blank"><img src="IMG/instagram.png"></a></button>
          <label class="informacao">@jovemp2023</label>
        </div>

        <div class="contatos">
          <button><img class="gmail" src="IMG/gmail.png"></button>
          <label class="informacao">jovempcontato@gmail.com</label>
        </div>
      </div>
    </div>

    <div class="inscricao">

      <div class="esquerda">
      <label class="titulo">Receba atualizações sobre o nicho do seu negócio.</label>
      <label class="subtitulo">Fique atento ao mundo dos negócios, iremos enviar apenas e-mails relevantes</label>
      </div>

      <div class="direita">
      <label class="text_field">
      <input type="text" placeholder="meuemail@gmail.com">
      <button>Quero Receber</button>
      </label>
      </div>

    </div>


    <div class="rodape">
      <img class="logo" src="IMG/logo_meiolaranja.png">

      <div class="links">
        <label class="copy"><i class="fa-regular fa-copyright"></i>Copyright 2023 | Powered by Jovemp.com.br</label>
        <a href="#">Sobre</a>
        <a href="#">Blog</a>
        <a href="#">Ajuda</a>
        <a href="#">Termos de Uso</a>
        <a href="#">Politica de privacidade</a>
      </div>
    </div>
</body>
</html>

<?php
if (isset ($_SESSION["Nome_Usuario"])){
?> 
<script>
 console.log('<?php echo $_SESSION["Nome_Usuario"] ?>');

 $('#Entrar').css('display','none');

 $('#logado').css('display','block');
 
</script>
<?php
}else{
?>
<script>
console.log('F');

$('#Entrar').css('display','block');

$('#logado').css('display','none');

</script>



<?php
}

?>
