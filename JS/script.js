
 var infos = false;
 function logado(){
    $('#entrar').css('display','none');
 }

 function MostrarInfos(){
    if(infos == false){

        $('#logadoinfo').css('display','block');

        infos = true;
    }else{
        $('#logadoinfo').css('display','none');

        infos = false;
    }
 }
 
 function esconder(){
    $('#logadoinfo').css('display','none');

    infos = false;
 }

 function deslogar() {
    // Executar o código da página controle.php
    $.ajax({
        url: 'controle.php',
        type: 'POST', // Ou 'GET' dependendo da sua necessidade
        success: function(data) {
            // Código executado com sucesso
            // Agora, recarregar a página index
            window.location.reload();
        },
        error: function() {
            // Lida com erros, se houver algum
        }
    });
}

function acessarcursos(){
    const logado = document.getElementById("logado");
    const display = window.getComputedStyle(logado, null).display;
    console.log(display);

    if(display == 'none'){
        window.location.href = "Cadastro/cadastro.html";
    }
    
}