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
