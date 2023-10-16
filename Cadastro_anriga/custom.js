
 var btn = document.getElementById("btn_cadastro");
 senha = true;
 senhaconfir = true;


$("#nome").blur(function() {
   
        var nome = $(this).val()

    if(nome.length < 3 || nome.length > 40){
        document.getElementById("Enome").innerHTML = "<i class='fa-regular fa-circle-xmark' style='color: #b21f1f;'></i> Seu nome deve conter de 3 a 40 caracteres";
        $('#Enome').css('display', 'inline');

        $('#Cnome').css('display','none');

        $('#nome').css('border-color','red');

       
    
    }else{
        $('#Enome').css('display', 'none');
       
        $('#Cnome').css('display','contents');

        $('#nome').css('border-color','green');

     
    }
});

$("#email").blur(function() {
     

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
      }

      validação = validateEmail(this.value);
      console.log(validação);
      
      if(validação == true){
        $('#Cemail').css('display','contents');

        $('#Eemail').css('display', 'none');

        $('#email').css('border-color','green');

    }else{
        
        $('#Eemail').css('display', 'contents');;
        
        $('#Cemail').css('display','none');

        $('#email').css('border-color','red');

        document.getElementById("Eemail").innerHTML = " <i class='fa-regular fa-circle-xmark' style='color: #b21f1f;'></i> Insira um Email Valido";
    
    }
  }
)

$("#senha").blur(function() {
   
    var senha = $(this).val()

if(senha.length < 8 || senha.length > 20){
    document.getElementById("Esenha").innerHTML = "<i class='fa-regular fa-circle-xmark' style='color: #b21f1f;'></i> Sua senha deve conter de 8 a 20 caracteres";
    $('#Esenha').css('display', 'inline');

    $('#Csenha').css('display','none');

    $('#senha').css('border-color','red');

}else{
    $('#Esenha').css('display', 'none');
   
    $('#Csenha').css('display','contents');

    $('#senha').css('border-color','green');


}
});

$("#senhaconfir").blur(function() {
   
    var senhaconfir = $(this).val()
    var senha = $("#senha").val();

if(senhaconfir != senha){
    document.getElementById("Esenhaconfir").innerHTML = "<i class='fa-regular fa-circle-xmark' style='color: #b21f1f;'></i> As senhas devem coencidir";
    $('#Esenhaconfir').css('display', 'inline');

    $('#Csenhaconfir').css('display','none');

    $('#senhaconfir').css('border-color','red');

   
}else if(senhaconfir == ""){
    document.getElementById("Esenhaconfir").innerHTML = "<i class='fa-regular fa-circle-xmark' style='color: #b21f1f;'></i> Confirme sua senha";
    $('#Esenhaconfir').css('display', 'inline');

    $('#Csenhaconfir').css('display','none');

    $('#senhaconfir').css('border-color','red');

}


else{
    $('#Esenhaconfir').css('display', 'none');
   
    $('#Csenhaconfir').css('display','contents');

    $('#senhaconfir').css('border-color','green');

   
}
});

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
       
        document.getElementById("Erros").innerHTML = resposta['msg']; 
      }
    });

    function MostrarSenha(){
        
        var btn = document.getElementById("senha");
        
        if(senha == true){
        
        btn.type = "text";
        this.senha = false;

        $("#icon_senha").removeClass("fa-solid fa-eye").addClass("fa-solid fa-eye-slash");

    }else{
        
        btn.type = "password"
        this.senha = true;

        $("#icon_senha").removeClass("fa-solid fa-eye-slash").addClass("fa-solid fa-eye");

    }
    }
    function MostrarConfirme(){
        
        
        var btn = document.getElementById("senhaconfir");
        var icon = document.getElementById("icon_senhaconfirm");
        
        if(senhaconfir == true){
        
        btn.type = "text";
        this.senhaconfir = false;

        
        btn.innerHTML = "";
        
        $("#icon_senhaconfirm").removeClass("fa-solid fa-eye").addClass("fa-solid fa-eye-slash");

    }else{
        
        btn.type = "password"
        this.senhaconfir = true;

        btn.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';

        $("#icon_senhaconfirm").removeClass("fa-solid fa-eye-slash").addClass("fa-solid fa-eye");
    }

    
    }
    
    if (Dados) {
        Dados.addEventListener("submit", async (e) => {
          e.preventDefault();
      
          const formdados = new FormData(Dados);
          const dados = await fetch("entrar.php", {
            method: "POST",
            body: formdados
          });
      
          const resposta = await dados.json();
      
          if (resposta['status'] == true) {
    
            setTimeout(function() {
                $(location).attr('href', '../Entrar/login.html');
            }, 5000);
           
            console.log(resposta['msg']);
    
            document.getElementById("msg").innerHTML = null;
    
          }else if(resposta['problema'] == 'email') {
            document.getElementById("msgemail").innerHTML = resposta['msg'];
    
            document.getElementById("msgesenha").innerHTML = null;
          }else{
    
            document.getElementById("msgemail").innerHTML = null;
    
            document.getElementById("msgsenha").innerHTML = resposta['msg'];
          }
        });
    

    }
  }