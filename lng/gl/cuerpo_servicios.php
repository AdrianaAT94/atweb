
            <div class="lng">
                <div class="contenido_variable">
                    <div class="zona_social">
                        <div class="rs_fb">
                            <a href="#">
                                <img src="img/iconos/fb.png" alt="FB">
                            </a>
                        </div>
                        <div class="rs_tw">
                            <a href="https://twitter.com/AT_DWEB" target="_blank">
                                <img src="img/iconos/tw.png" alt="TW">
                            </a>
                        </div>
                        <div class="rs_gp">
                            <a href="#">
                                <img src="img/iconos/g+.png" alt="G+">
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="idiomas">
                        <div class="lng_gl">
                            <a href="?lan=gl">
                                <img src="img/iconos/gl.png" alt="GL">
                            </a>
                        </div>
                        <div class="lng_esp">
                            <a href="?lan=es">
                                <img src="img/iconos/es.png" alt="ES">
                            </a>
                        </div>
                        <div class="lng_en">
                            <a href="?lan=en">
                                <img src="img/iconos/en.png" alt="EN">
                            </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="header">
                <div class="slider">
                    <div class="imagen_slider uno"></div>
                    <div class="imagen_slider dos"></div>
                    <div class="imagen_slider tres"></div>
                    <div class="imagen_slider cuatro"></div>
                    <div class="imagen_slider cinco"></div>
                </div>            
                <div class="menu_movil mvl">
                    <div class="img_menu_movil">
                        <img src="img/iconos/menu.png" alt="menu">
                    </div>

                    <div class="contenido_menu_movil">
                        <ul>                    
                            <li><a href="index.php?lan=gl">INICIO</a></li>
                            <li><a href="innovacion.php?lan=gl">INNOVACIÓN</a></li>
                            <li class="activo"><a href="servicios.php?lan=gl">SERVIZOS</a></li>
                            <li><a href="portfolio.php?lan=gl">PORTFOLIO</a></li>
                            <li><a href="consulta.php?lan=gl">CONSULTANOS</a></li>
                            <li><a href="noticias/index.php?lang=gl">NOVAS</a></li>
                            <li><a href="contacto.php?lan=gl">CONTACTO</a></li>
                            <div class="clear"></div>                    
                        </ul>
                    </div>
                </div>
                <div class="menu_aparece pc">
                    <div class="contenido_variable">
                        <ul class="menu_principal">
                            <li><a href="index.php?lan=gl">INICIO</a></li>
                            <li><a href="innovacion.php?lan=gl">INNOVACIÓN</a></li>
                            <li class="activo"><a href="servicios.php?lan=gl">SERVIZOS</a></li>
                            <li><a href="portfolio.php?lan=gl">PORTFOLIO</a></li>
                            <li><a href="consulta.php?lan=gl">CONSULTANOS</a></li>
                            <li><a href="noticias/index.php?lang=gl">NOVAS</a></li>
                            <li><a href="contacto.php?lan=gl">CONTACTO</a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
                <div class="degradado">
                </div>
                <div class="sub_info">
                    <div class="logo">
                        <a href="index.php=lan=gl"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="subslider">
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>DESEÑO</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>INNOVACIÓNN</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>TECNOLOXÍA</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>INFORMACIÓN</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>DESENVOLVEMENTO</h3></div>
                        </div>
                    </div>
                </div>
                <div class="menu pc">
                    <div class="contenido_variable">
                        <ul class="">
                            <li><a href="index.php?lan=gl">INICIO</a></li>
                            <li><a href="innovacion.php?lan=gl">INNOVACIÓN</a></li>
                            <li class="activo"><a href="servicios.php?lan=gl">SERVIZOS</a></li>
                            <li><a href="portfolio.php?lan=gl">PORTFOLIO</a></li>
                            <li><a href="consulta.php?lan=gl">CONSULTANOS</a></li>
                            <li><a href="noticias/index.php?lang=gl">NOVAS</a></li>
                            <li><a href="contacto.php?lan=gl">CONTACTO</a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="contenido">
                <div class="contenido_servicios">
                    <div class="contenido_variable">
                        <div class="servicios">                            
                            <div class="titulo_apartado_index">
                                <h1>SERVIZOS</h1>
                            </div>
                            <div class="contenido_apartado_index">                                
                                <div class="lista_servicios">
                                    <?php if($servicio == 'webs' || $servicio == '') { ?>
                                        <div class="elemento_lista_servicio webs activo" id="webs">
                                            <div class="tama">
                                                WEBS CORPORATIVAS
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio webs" id="webs">
                                            <div class="tama">
                                                WEBS CORPORATIVAS
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'tiendas') { ?>
                                        <div class="elemento_lista_servicio tiendas activo" id="tiendas">
                                            <div class="tama">
                                                TENDAS ONLINE
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio tiendas" id="tiendas">
                                            <div class="tama">
                                                TENDAS ONLINE
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'blog') { ?>
                                        <div class="elemento_lista_servicio blogs activo" id="blogs">
                                            <div class="tama">
                                                BLOGS
                                            </div>
                                        </div>
                                    <?php }  else { ?>
                                        <div class="elemento_lista_servicio blogs" id="blogs">
                                            <div class="tama">
                                                BLOGS
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'redes') { ?>
                                        <div class="elemento_lista_servicio redes activo" id="redes">
                                            <div class="tama">
                                                REDES SOCIAIS
                                            </div>
                                        </div>
                                    <?php } else { ?> 
                                        <div class="elemento_lista_servicio redes" id="redes">
                                            <div class="tama">
                                                REDES SOCIAIS
                                            </div>
                                        </div>                                    
                                    <?php } ?>

                                    <?php if($servicio == 'personal') { ?>
                                        <div class="elemento_lista_servicio personalizado activo" id="personalizado">
                                            <div class="tama">
                                                DESENVOLVEMENTO PERSONALIZADO
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio personalizado" id="personalizado">
                                            <div class="tama">
                                                DESENVOLVEMENTO PERSONALIZADO
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'equipo') { ?>
                                        <div class="elemento_lista_servicio equipos activo" id="equipos">
                                            <div class="tama">
                                                MANTEMENTO DE EQUIPOS
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio equipos" id="equipos">
                                            <div class="tama">
                                                MANTEMENTO DE EQUIPOS
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                </div>
                                <div class="contenido_servicios">                                    
                                    <?php if($servicio == 'webs' || $servicio == '') { ?>
                                        <div class="elemento_servicio webs activo">
                                            <div class="imagen_elemento_servicio">
                                                <div class="titulo_elemento_servicio">
                                                    <h3>WEBS CORPORATIVAS</h3>
                                                </div>
                                                <div class="contenido_elemento_servicio">
                                                    <div class="imagen_elemento_servicio">
                                                        <img src="img/contenido/web2.jpg" alt="Webs Corporativas">
                                                    </div>
                                                    <div class="texto_elemento_servicio">
                                                        <p>Centramos o noso traballo en mostrar a imaxe corporativa nunha web que 
                                                            solucione as necesidades que se demandan.</p>
                                                        <p>Empregamos as máis altas tecnoloxías para dar unha mellor experiencia de 
                                                            uso ó usuario.</p>
                                                        <p>Dende unha sinxela web a unha máis complexa con todo luxo de detalles, empregamos 
                                                            lenguaxes como HTML5, PHP, Javascript, jQuery ou CSS3.</p>
                                                        <p>A marxe do empregado nas páxinas web que creamos, crease un diseño 
                                                            adaptativo a todo tipo de pantallas.</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio webs">
                                            <div class="imagen_elemento_servicio">
                                                <div class="titulo_elemento_servicio">
                                                    <h3>WEBS CORPORATIVAS</h3>
                                                </div>
                                                <div class="contenido_elemento_servicio">
                                                    <div class="imagen_elemento_servicio">
                                                        <img src="img/contenido/web2.jpg" alt="Webs Corporativas">
                                                    </div>
                                                    <div class="texto_elemento_servicio">
                                                        <p>Centramos o noso traballo en mostrar a imaxe corporativa nunha web que 
                                                            solucione as necesidades que se demandan.</p>
                                                        <p>Empregamos as máis altas tecnoloxías para dar unha mellor experiencia de 
                                                            uso ó usuario.</p>
                                                        <p>Dende unha sinxela web a unha máis complexa con todo luxo de detalles, empregamos 
                                                            lenguaxes como HTML5, PHP, Javascript, jQuery ou CSS3.</p>
                                                        <p>A marxe do empregado nas páxinas web que creamos, crease un diseño 
                                                            adaptativo a todo tipo de pantallas.</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'tiendas') { ?>            
                                        <div class="elemento_servicio tiendas activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>TENDAS ONLINE</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/tienda2.jpg" alt="Tendas Online">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Axudamosche a impulsar o teu negocio coa creación dunha tenda online para sacar 
                                                        todo o partido do e-commerce.</p>
                                                    <p>Con plataformas como Prestashop ou Magento, usted terá o seu negocio aberto a todas 
                                                        horas e con clientes de todo o mundo con diferentes formas de pago.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>         
                                        <div class="elemento_servicio tiendas">
                                            <div class="titulo_elemento_servicio">
                                                <h3>TENDAS ONLINE</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/tienda2.jpg" alt="Tendas Online">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Axudamosche a impulsar o teu negocio coa creación dunha tenda online para sacar 
                                                        todo o partido do e-commerce.</p>
                                                    <p>Con plataformas como Prestashop ou Magento, usted terá o seu negocio aberto a todas 
                                                        horas e con clientes de todo o mundo con diferentes formas de pago.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'blog') { ?>
                                        <div class="elemento_servicio blogs activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>BLOGS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/blog2.jpg" alt="Blogs">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Se che gusta escribir, ou simplemente ter o teu propio canal no que poder decir o que 
                                                        pensas ó mundo, un blog pode ser o teu mellor aliado.</p>
                                                    <p>Poderás ter a túa propia páxina web e unha sección de novas actualizables. Mediante CMS 
                                                        como WordPress, Joomla o Drupal poderás ter o teu sitio no que dar renda solta a que 
                                                        os teus dedos tecleen o que se che pase pola cabeza.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?> 
                                        <div class="elemento_servicio blogs">
                                            <div class="titulo_elemento_servicio">
                                                <h3>BLOGS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/blog2.jpg" alt="Blogs">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Se che gusta escribir, ou simplemente ter o teu propio canal no que poder decir o que 
                                                        pensas ó mundo, un blog pode ser o teu mellor aliado.</p>
                                                    <p>Poderás ter a túa propia páxina web e unha sección de novas actualizables. Mediante CMS 
                                                        como WordPress, Joomla o Drupal poderás ter o teu sitio no que dar renda solta a que 
                                                        os teus dedos tecleen o que se che pase pola cabeza.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'redes') { ?>
                                        <div class="elemento_servicio redes activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>REDES SOCIAIS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/redes_sociales2.jpg" alt="Redes Sociais">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Encargamonos da creación e xestión de perfiles en redes sociais para promocionar o seu 
                                                        negocio e asi outorgarlle máis visitas.</p>
                                                    <p>Hoxe en día estar presente nas redes sociais como Facebook, Twitter, Youtube ou Google+ 
                                                        conseguen un trato máis familiar con clientes ou posibles clientes.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio redes">
                                            <div class="titulo_elemento_servicio">
                                                <h3>REDES SOCIAIS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/redes_sociales2.jpg" alt="Redes Sociais">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Encargamonos da creación e xestión de perfiles en redes sociais para promocionar o seu 
                                                        negocio e asi outorgarlle máis visitas.</p>
                                                    <p>Hoxe en día estar presente nas redes sociais como Facebook, Twitter, Youtube ou Google+ 
                                                        conseguen un trato máis familiar con clientes ou posibles clientes.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'personal') { ?>
                                        <div class="elemento_servicio personalizado activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>DESENVOLVEMENTO PERSONALIZADO</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/desarrollo_personalizado2.jpg" alt="Desenvolvemento Personalizado">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Contamos coa máis alta tecnoloxía para levar as súas ideas o seguinte nivel.</p>
                                                    <p>Así pois, mediante lenguaxes como PHP ou Java podemos crear a aplicación 
                                                        que vostede necesite para darlle un uso concreto.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio personalizado">
                                            <div class="titulo_elemento_servicio">
                                                <h3>DESENVOLVEMENTO PERSONALIZADO</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/desarrollo_personalizado2.jpg" alt="Desenvolvemento Personalizado">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Contamos coa máis alta tecnoloxía para levar as súas ideas o seguinte nivel.</p>
                                                    <p>Así pois, mediante lenguaxes como PHP ou Java podemos crear a aplicación 
                                                        que vostede necesite para darlle un uso concreto.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'equipo') { ?>
                                        <div class="elemento_servicio equipos activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>MANTEMENTO DE EQUIPOS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/equipos2.jpg" alt="Mantemento de Equipos">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Encargamonos de ter os seus equipos informáticos libres e protexidos contra posibles 
                                                        problemas, facendo uso das actualizacións máis recentes.</p>
                                                    <p>Ofrecemos servizos como Sistemas de copia de seguridade, implantación de redes WLAN ou LAN, 
                                                        montaxe e reparación de equipos entre outros.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio equipos">
                                            <div class="titulo_elemento_servicio">
                                                <h3>MANTEMENTO DE EQUIPOS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/equipos2.jpg" alt="Mantemento de Equipos">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Encargamonos de ter os seus equipos informáticos libres e protexidos contra posibles 
                                                        problemas, facendo uso das actualizacións máis recentes.</p>
                                                    <p>Ofrecemos servizos como Sistemas de copia de seguridade, implantación de redes WLAN ou LAN, 
                                                        montaxe e reparación de equipos entre outros.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contenido_contacto_index">
                    <div class="contenido_variable">
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>CONTACTO</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <ul>
                                    <li>Dirección: Porto do Son</li>
                                    <li>Telf: <a href="tel:999999999">999 999 999</a></li>
                                    <li>Email: <a href="mailto:adri.13a@gmail.com">adri.13a@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>SEGUENOS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <div class="redes_sociales_contacto">
                                    <div class="calcula_alto">
                                        <div class="rs_fb">
                                            <a href="#">
                                                <img src="img/iconos/fb.png" alt="FB">
                                            </a>
                                        </div>
                                        <div class="rs_tw">
                                            <a href="https://twitter.com/AT_DWEB" target="_blank">
                                                <img src="img/iconos/tw.png" alt="TW">
                                            </a>
                                        </div>
                                        <div class="rs_gp">
                                            <a href="#">
                                                <img src="img/iconos/g+.png" alt="G+">
                                            </a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>ÚLTIMOS TWEETS</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <a class="twitter-timeline" data-height="200" href="https://twitter.com/AT_DWEB"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>  
                        <div class="clear"></div>
                    </div>
                </div>    
            </div>

            <div class="footer">
                <div class="contenido_variable">
                    <div class="bloque">
                        <a href="aviso_legal.php?lan=gl">Aviso Legal</a> | <a href="politica_privacidad.php?lan=gl">Política de Privacidade</a>
                    </div>
                    <div class="bloque">
                        ©AT DISEÑO WEB 2016
                    </div>
                    <div class="clear"></div>
                </div>
            </div>