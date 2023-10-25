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

function deslogar() {
    // Executar o código da página controle.php
    $.ajax({
        url: '../../controle.php',
        type: 'POST', // Ou 'GET' dependendo da sua necessidade
        success: function(data) {
            // Código executado com sucesso
            // Agora, recarregar a página index
            $(location).attr('href', '../../index.php');
        },
        error: function() {
            // Lida com erros, se houver algum
        }
    });
}