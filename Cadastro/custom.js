var btn = document.getElementById("btn_cadastro");
senha = true;
senhaconfir = true;

barra = 0;

var nomee = 0;
var email = 0;
var senhaa = 0;
var senhac = 0;

const Dados = document.getElementById("cadastro");

if (Dados) {
    Dados.addEventListener("submit", async (e) => {
      e.preventDefault();
  
      const formdados = new FormData(Dados);

      const dados = await fetch("cadastro.php", {
        method: "POST",
        body: formdados
      });
  
      const resposta = await dados.json();
  
      if (resposta['status'] == true) {

                 $('#loading')
                 .css({
                    position: "fixed", // fixa o elemento
                    zIndex: "9", // coloca o elemento por cima dos outros
                    top: "50%", // move 50% do topo
                    left: "50%", // move 50% da esquerda
                    transform: "translate(-50%, -50%)" // centraliza
                 })
                 .show();
                 $('#login').css({
                    opacity: "0.1",
                    trasition: "1s"
                 })

        setTimeout(function() {
            $(location).attr('href', '../Entrar/login.html');
        }, 5000);
       
        console.log('Boa');

      } else {

        document.getElementById("erroemail").innerHTML = resposta['msg'];
        console.log(resposta['msg']);
      }
    });

    function MostrarSenha(){
        
        var btn = document.getElementById("senha");

        var image = document.getElementById("olho");
        
        if(senha == true){
        
        btn.type = "text";
        this.senha = false;

        image.src = "../IMG/eye-off 16.svg";


    }else{

        
        btn.type = "password"
        this.senha = true;

        image.src = "../IMG/eye.svg";


    }
    }
    function MostrarConfirme(){
        var btn = document.getElementById("senhaC");

        var image = document.getElementById("olhoC");
        
        if(senhaconfir == true){
        
        btn.type = "text";
        this.senhaconfir = false;

        image.src = "../IMG/eye-off 16.svg";


    }else{

        btn.type = "password"
        this.senhaconfir = true;

        image.src = "../IMG/eye.svg";

    }
}
}


$("#nome").blur(function() {
   
  var nome = $(this).val()

if(nome.length < 3 || nome.length > 40){


  document.getElementById("erronome").innerHTML = "Insira um nome e um sobrenome";

  $('#nome').css('border-color','red');


  if(nomee == 0){
    console.log(nomee);
  }else{
    nomee = 0;
    barra--;
  }

}else{

  document.getElementById("erronome").innerHTML = null;

  $('#nome').css('border-color','#d14919');

  if(nomee == 1){
    console.log(nomee);
  }else{
    nomee = 1;
    barra++;
  }
}
console.log(barra);
carregarbarra();
});

$("#email").blur(function() {


function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}

validação = validateEmail(this.value);
console.log(validação);

if(validação == true){
 
  $('#email').css('border-color','#d14919');

  document.getElementById("erroemail").innerHTML = null;

 
  if(email == 1){
    console.log(email);
  }else{
    email = 1;
    barra++;
  }

}else{
  
  $('#email').css('border-color','red');

  document.getElementById("erroemail").innerHTML = "Insira um e-mail válido";

 
  if(email == 0){
    console.log(nomee);
  }else{
    email = 0;
    barra--;
  }

}
console.log(barra);
carregarbarra();
}
)

$("#senha").blur(function() {

var senha = $(this).val()

if(senha.length < 8 || senha.length > 20){

document.getElementById("errosenha").innerHTML = "Sua senha deve conter de 8 a 20 caracteres";

$('#senha').css('border-color','red');

if(senhaa == 0){
  console.log(senhaa);
}else{
  senhaa = 0;
  barra--;
}

}else{

$('#senha').css('border-color','#d14919');

document.getElementById("errosenha").innerHTML = null;

if(senhaa == 1){
  console.log(senhaa);
}else{
  senhaa = 1;
  barra++;
}

}
carregarbarra();
});

$("#senhaC").blur(function() {

var senhaconfir = $(this).val()
var senha = $("#senha").val();

if(senhaconfir != senha){
document.getElementById("errosenha2").innerHTML = "As senhas devem coencidir";


$('#senhaC').css('border-color','red');

if(senhac == 0){
  console.log(senhaC);
}else{
  senhac = 0;
  barra--;
}


}else if(senhaconfir == ""){

document.getElementById("errosenha2").innerHTML = "Confirme sua senha";


if(senhac == 0){
  console.log(senhaC);
}else{
  senhac = 0;
  barra--;
}

$('#senhaC').css('border-color','red');

}

else{

$('#senhaC').css('border-color','#d14919');

document.getElementById("errosenha2").innerHTML = null;


if(senhac == 1){
  console.log(senhac);
}else{
  senhac = 1;
  barra++;
}
}
carregarbarra();
});


function carregarbarra(){

    switch (barra){
      case 0:
        $('#1').css('background-color','#1d1d1d');
        $('#2').css('background-color','#1d1d1d');
        $('#3').css('background-color','#1d1d1d');
        $('#4').css('background-color','#1d1d1d');
        break;
      case 1:
        $('#1').css('background-color','#d14919');
        $('#2').css('background-color','#1d1d1d');
        $('#3').css('background-color','#1d1d1d');
        $('#4').css('background-color','#1d1d1d');
        break;
      case 2:
        $('#1').css('background-color','#d14919');
        $('#2').css('background-color','#d14919');
        $('#3').css('background-color','#1d1d1d');
        $('#4').css('background-color','#1d1d1d');
        break;
      case 3:
        $('#1').css('background-color','#d14919');
        $('#2').css('background-color','#d14919');
        $('#3').css('background-color','#d14919');
        $('#4').css('background-color','#1d1d1d');
        break;
      case 4:
        $('#1').css('background-color','#d14919');
        $('#2').css('background-color','#d14919');
        $('#3').css('background-color','#d14919');
        $('#4').css('background-color','#d14919');
        break;

    }
}


