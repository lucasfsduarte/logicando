
/* Função para o scroll suave das páginas */

jQuery(document).ready(function($)
{ 
    $(".scroll").click(function(event)
    {        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1500); // 1500 é o tempo em milissegundos //
   });
});