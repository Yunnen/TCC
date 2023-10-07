senha = true;
senhaconfir = true;

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

      } else {
        console.log(resposta['msg']);
      }
    });

    
}
