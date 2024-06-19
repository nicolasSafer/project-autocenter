
// $(document).ready(function(){
//     $(".menu > ul > li").click(function(e){
//         e.preventDefault(); // Evita o comportamento padrão do link, se aplicável
//         //remobe o active e aplica em outro
//         $(this).siblings().removeClass("active");
//         //abre o submenu
//         $(this).toggleClass("active");

//         $(this).find("ul").slideToggle(); 
//         //Quando clicar em outro sub menu o anterior vai fechar
//         $(this).siblings().find("ul").slideUp();
//         //remove a classe active do item do menu quando clicado no seu submenu
//         $(this).siblings().find("ul").find("li").removeClass("active");
//     });
// });



$(document).ready(function() {
    $(".menu > ul > li > a").click(function(e) {
        // Previne o comportamento padrão apenas se houver um submenu
        if ($(this).siblings("ul").length > 0) {
            e.preventDefault(); // Evita o comportamento padrão do link

            // Remove a classe 'active' de todos os itens irmãos e fecha seus submenus
            $(this).parent().siblings().removeClass("active").find("ul").slideUp();

            // Alterna a classe 'active' no item clicado e abre/fecha o submenu
            $(this).parent().toggleClass("active").find("ul").slideToggle();

            // Remove a classe 'active' dos sub-itens quando um item principal é clicado
            $(this).parent().siblings().find("li").removeClass("active");
        }
    });

    // Adiciona comportamento aos sub-itens para remover a classe 'active' ao clicar
    $(".sub-menu > li > a").click(function() {
        $(this).parents("li").siblings().find("li").removeClass("active");
        $(this).parent().addClass("active");
    });
});

$(document).ready(function() {
    $(".menu-btn").click(function() {
        $(".sidebar").toggleClass("active");
        $(".menu-btn i").toggleClass("rotated");
    });
});