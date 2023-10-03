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
}
