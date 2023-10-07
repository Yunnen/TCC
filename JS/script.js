var contagem = 0;

var btndireita = document.getElementById("#direita");

var btnesquerda = document.getElementById("#esquerda");


function somarbotão(){
   
}
function diminuirbotao(){
    
   
}

var myCarousel = document.getElementById('#carouselExampleControls')

myCarousel.addEventListener('slid.bs.carousel', function () {
    $('#direita').css('display', 'none');
    console.log("Fim")
})

var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  wrap: false,
  
})