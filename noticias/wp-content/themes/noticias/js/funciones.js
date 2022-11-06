jQuery( document ).ready(function() {
	jQuery('.img_menu_movil img').click(function() {
	    if (jQuery('.contenido_menu_movil').is(':hidden')) {
	      jQuery('.contenido_menu_movil').show();
	    }
	    else {
	      jQuery('.contenido_menu_movil').hide();
	    }
	  });

	  jQuery('.contenido_menu_movil ul li a').click(function() {
	    jQuery('.contenido_menu_movil').hide();
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
	    jQuery(".slider .imagen_slider").hide("slide", { direction: "left" }, 2000);
	    jQuery(".slider .imagen_slider").eq(i).show("slide", { direction: "right" }, 2000);
	  }

	  //slider2

	$(function(){
	    jQuery('.subslider div.sub_grupo:gt(0)').hide();
	    setInterval(function(){
	      jQuery('.subslider div.sub_grupo:first-child').fadeOut(0)
	         .next('div.sub_grupo').fadeIn(1000)
	         .end().appendTo('.subslider');}, 6000);
	});

	//slider3
	jQuery(function () {  
  	  var interval = setInterval(camSlider_der, 6000);
	  var controlador = 0;
		jQuery('.flecha_der_port').stop().click(function(){	
			camSlider_der();	
		    clearInterval(interval);
		    interval = setInterval(camSlider_der, 6000);	
		});

		jQuery('.flecha_izq_port').stop().click(function(){
			camSlider_izq();		
		    clearInterval(interval);
		    interval = setInterval(camSlider_der, 6000);	
		});
	 
	  function camSlider_der(){
	    controlador++;
	    if(controlador == $(".slider_portfolio div.elemento_portfolio").size()){
	      controlador = 0;
	    }
	    jQuery(".slider_portfolio div.elemento_portfolio").hide("slide", { direction: "left" }, 2000);
	    jQuery(".slider_portfolio div.elemento_portfolio").eq(controlador).show("slide", { direction: "right" }, 2000);
	  }

	  function camSlider_izq(){
	    if(controlador == 0){
	      controlador = jQuery(".slider_portfolio div.elemento_portfolio").size();
	    }
	    controlador--;
	    jQuery(".slider_portfolio div.elemento_portfolio").hide("slide", { direction: "right" }, 2000);
	    jQuery(".slider_portfolio div.elemento_portfolio").eq(controlador).show("slide", { direction: "left" }, 2000);
	  }
	});

	//servicios
	jQuery(document).on("click", ".elemento_lista_servicio", function() {
        cur = $(this).attr("id");        
        jQuery(".elemento_lista_servicio").each(function() {  
           jQuery('.elemento_lista_servicio').removeClass('activo');
           jQuery('.elemento_servicio').removeClass('activo');
           jQuery('#'+cur).addClass("activo");
           jQuery('.elemento_servicio.'+cur).addClass('activo');
       });
    });

});
