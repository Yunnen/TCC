senha = true;
senhaconfir = true;

var image = document.getElementById("olho");

function MostrarSenha(){
        
        var btn = document.getElementById("senha");
        
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

    const Dados = document.getElementById("entrar");
    const botão = document.getElementById("btn_login");
    const zoio = document.getElementById("zoio");
if (zoio){
    zoio.addEventListener("click", async (e) => {
      e.preventDefault();})
 } 

if (botão) {

    botão.addEventListener("click", async (e) => {
      e.preventDefault();
  
      const formdados = new FormData(Dados);
      const dados = await fetch("entrar.php", {
        method: "POST",
        body: formdados
      });
  
      const resposta = await dados.json();
  
      if (resposta['status'] == true) {


            $(location).attr('href', '../index.php');
      
       
        console.log(resposta['msg']);

        document.getElementById("msg").innerHTML = null;

      }else if(resposta['problema'] == 'email') {

        document.getElementById("msgemail").innerHTML = resposta['msg'];

        

        $('#email').css('border-color','red');

      }else{

        $('#email').css('border-color','#ff5b1b');

        document.getElementById("msgemail").innerHTML = null;

        document.getElementById("msgsenha").innerHTML = resposta['msg'];

        $('#senha').css('border-color','red');
      }
    });

    
}
