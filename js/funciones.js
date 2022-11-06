$( document ).ready(function() {
	$('.img_menu_movil img').click(function() {
	    if ($('.contenido_menu_movil').is(':hidden')) {
	      $('.contenido_menu_movil').show();
	    }
	    else {
	      $('.contenido_menu_movil').hide();
	    }
	  });

	  $('.contenido_menu_movil ul li a').click(function() {
	    $('.contenido_menu_movil').hide();
	  });

	  //slider1	  
	  var i = 0;
	  main();

	  function main(){
	    var control = setInterval(cambiarSlider, 6000);
	  }

	  function cambiarSlider(){
	    i++;
	    if(i == $(".slider .imagen_slider").size()){
	      i = 0;
	    }
	    $(".slider .imagen_slider").hide("slide", { direction: "left" }, 2000);
	    $(".slider .imagen_slider").eq(i).show("slide", { direction: "right" }, 2000);
	  }

	  //slider2

	$(function(){
	    $('.subslider div.sub_grupo:gt(0)').hide();
	    setInterval(function(){
	      $('.subslider div.sub_grupo:first-child').fadeOut(0)
	         .next('div.sub_grupo').fadeIn(1000)
	         .end().appendTo('.subslider');}, 6000);
	});

	//slider3
	$(function ($) {  
  	  var interval = setInterval(camSlider_der, 6000);
	  var controlador = 0;
		$('.flecha_der_port').stop().click(function(){	
			camSlider_der();	
		    clearInterval(interval);
		    interval = setInterval(camSlider_der, 6000);	
		});

		$('.flecha_izq_port').stop().click(function(){
			camSlider_izq();		
		    clearInterval(interval);
		    interval = setInterval(camSlider_der, 6000);	
		});
	 
	  function camSlider_der(){
	    controlador++;
	    if(controlador == $(".slider_portfolio div.elemento_portfolio").size()){
	      controlador = 0;
	    }
	    $(".slider_portfolio div.elemento_portfolio").hide("slide", { direction: "left" }, 2000);
	    $(".slider_portfolio div.elemento_portfolio").eq(controlador).show("slide", { direction: "right" }, 2000);
	  }

	  function camSlider_izq(){
	    if(controlador == 0){
	      controlador = $(".slider_portfolio div.elemento_portfolio").size();
	    }
	    controlador--;
	    $(".slider_portfolio div.elemento_portfolio").hide("slide", { direction: "right" }, 2000);
	    $(".slider_portfolio div.elemento_portfolio").eq(controlador).show("slide", { direction: "left" }, 2000);
	  }
	});

	//servicios
	$(document).on("click", ".elemento_lista_servicio", function() {
        cur = $(this).attr("id");        
        $(".elemento_lista_servicio").each(function() {  
           $('.elemento_lista_servicio').removeClass('activo');
           $('.elemento_servicio').removeClass('activo');
           $('#'+cur).addClass("activo");
           $('.elemento_servicio.'+cur).addClass('activo');
       });
    });

    $("button#pop").click(function() {
    	$(".fondo_pop").hide();
    });
});

/* DETECTAS IDIOMA */
function getGET()
    {
        // capturamos la url
        var loc = document.location.href;
        // si existe el interrogante
        if(loc.indexOf('?')>0)
        {
            // cogemos la parte de la url que hay despues del interrogante
            var getString = loc.split('?')[1];
            // obtenemos un array con cada clave=valor
            var GET = getString.split('&');
            var get = {};
 
            // recorremos todo el array de valores
            for(var i = 0, l = GET.length; i < l; i++){
                var tmp = GET[i].split('=');
                get[tmp[0]] = unescape(decodeURI(tmp[1]));
            }
            return get;
        }
        else {
            texto = "CERRAR";
            texto2= "MENÚ";            
        }
    }

    window.onload = function()
    {
        // Cogemos los valores pasados por get
        var valores=getGET();
        if(valores)
        {
            // hacemos un bucle para pasar por cada indice del array de valores
            for(var index in valores)
            {
                if (index == "lan" && valores[index] == "en") {
    				$('form#formulario_consulta').append('<input name="enviar" type="submit" value="send">');
                }
                else if (index == "lan" && valores[index] == "gl") {
    				$('form#formulario_consulta').append('<input name="enviar" type="submit" value="enviar">');
                }
                else {
    				$('form#formulario_consulta').append('<input name="enviar" type="submit" value="enviar">');
                }
            }
        }
        else {
			$('form#formulario_consulta').append('<input name="enviar" type="submit" value="enviar">');
        }
    }
