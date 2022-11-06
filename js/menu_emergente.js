$(function(){

       /// StickNav
       var stickyNavTop = $('.menu').offset().top;
       /*var menu1 = $('.menu').offset().top;
       var menu2 = $('.seccion1.clear').offset().top;
       var menu3 = $('.seccion2').offset().top;
       var menu4 = $('.seccion3').offset().top;
       var menu5 = $('.seccion4').offset().top;
       var menu6 = $('.seccion5').offset().top;
       var menu7 = $('.seccion6').offset().top;*/

        var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
           // $('.menu_index').stop(true,true).addClass('isStuck', 500);
            $('.menu_aparece').stop(true).animate({
            top: "0"
        }, 400);
            $('.menu').stop(true).slideUp(400);
        }
        /*if (scrollTop > menu2) {
                   // $('.menu_index').stop(true,true).addClass('isStuck', 500);
                    $('.boton_seccion2, .boton_seccion3, .boton_seccion4, .boton_seccion5, .boton_seccion6').stop(true).removeClass('activo');
                    $('.boton_seccion1').stop(true).addClass('activo');
                }
        if (scrollTop > menu3) {
                   // $('.menu_index').stop(true,true).addClass('isStuck', 500);
                    $('.boton_seccion1, .boton_seccion3, .boton_seccion4, .boton_seccion5, .boton_seccion6').stop(true).removeClass('activo');
                    $('.boton_seccion2').stop(true).addClass('activo');
                }
        if (scrollTop > menu4) {
                   // $('.menu_index').stop(true,true).addClass('isStuck', 500);
                    $('.boton_seccion1, .boton_seccion2, .boton_seccion4, .boton_seccion5, .boton_seccion6').stop(true).removeClass('activo');
                    $('.boton_seccion3').stop(true).addClass('activo');
                }
        if (scrollTop > menu5) {
                   // $('.menu_index').stop(true,true).addClass('isStuck', 500);
                    $('.boton_seccion1, .boton_seccion3, .boton_seccion2, .boton_seccion5, .boton_seccion6').stop(true).removeClass('activo');
                    $('.boton_seccion4').stop(true).addClass('activo');
                }
        if (scrollTop > menu6) {
                   // $('.menu_index').stop(true,true).addClass('isStuck', 500);
                    $('.boton_seccion1, .boton_seccion3, .boton_seccion4, .boton_seccion2, .boton_seccion6').stop(true).removeClass('activo');
                    $('.boton_seccion5').stop(true).addClass('activo');
                }
        if (scrollTop > menu7) {
                   // $('.menu_index').stop(true,true).addClass('isStuck', 500);
                    $('.boton_seccion1, .boton_seccion3, .boton_seccion4, .boton_seccion5, .boton_seccion2').stop(true).removeClass('activo');
                    $('.boton_seccion6').stop(true).addClass('activo');
                }*/
		if (scrollTop < stickyNavTop) {
           // $('.menu_index').stop(true,true).addClass('isStuck', 500);
            $('.menu_aparece').stop(true).animate({
            top: "-20%"
        }, 400);
            $('.menu').stop(true).slideDown(400);
        }

    };
    stickyNav();
       $(window).scroll(function() {
            stickyNav();
        });
    });