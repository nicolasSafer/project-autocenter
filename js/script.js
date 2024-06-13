

$(document).ready(function(){
    $(".menu > ul > li").click(function(e){
        e.preventDefault(); // Evita o comportamento padrão do link, se aplicável
        //remobe o active e aplica em outro
        $(this).siblings().removeClass("active");
        //
        $(this).toggleClass("active");

        $(this).find("ul").slideToggle(); 
        //Quando clicar em outro sub menu o anterior vai fechar
        $(this).siblings().find("ul").slideUp();
        //remove a classe active do item do menu quando clicado no seu submenu
        $(this).siblings().find("ul").find("li").removeClass("active");
    });
});

