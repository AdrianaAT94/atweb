
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
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="innovacion.php">INNOVACIÓN</a></li>
                            <li class="activo"><a href="servicios.php">SERVICIOS</a></li>
                            <li><a href="portfolio.php">PORTFOLIO</a></li>
                            <li><a href="consulta.php">CONSULTANOS</a></li>
                            <li><a href="noticias/index.php?lang=es">NOTICIAS</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
                            <div class="clear"></div>                    
                        </ul>
                    </div>
                </div>
                <div class="menu_aparece pc">
                    <div class="contenido_variable">
                        <ul class="menu_principal">
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="innovacion.php">INNOVACIÓN</a></li>
                            <li class="activo"><a href="servicios.php">SERVICIOS</a></li>
                            <li><a href="portfolio.php">PORTFOLIO</a></li>
                            <li><a href="consulta.php">CONSULTANOS</a></li>
                            <li><a href="noticias/index.php?lang=es">NOTICIAS</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
                <div class="degradado">
                </div>
                <div class="sub_info">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="subslider">
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>DISEÑO</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>INNOVACIÓN</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>TECNOLOGÍA</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>INFORMACIÓN</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>DESARROLLO</h3></div>
                        </div>
                    </div>
                </div>
                <div class="menu pc">
                    <div class="contenido_variable">
                        <ul class="">
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="innovacion.php">INNOVACIÓN</a></li>
                            <li class="activo"><a href="servicios.php">SERVICIOS</a></li>
                            <li><a href="portfolio.php">PORTFOLIO</a></li>
                            <li><a href="consulta.php">CONSULTANOS</a></li>
                            <li><a href="noticias/index.php?lang=es">NOTICIAS</a></li>
                            <li><a href="contacto.php">CONTACTO</a></li>
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
                                <h1>SERVICIOS</h1>
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
                                                TIENDAS ONLINE
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio tiendas" id="tiendas">
                                            <div class="tama">
                                                TIENDAS ONLINE
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
                                                REDES SOCIALES
                                            </div>
                                        </div>
                                    <?php } else { ?> 
                                        <div class="elemento_lista_servicio redes" id="redes">
                                            <div class="tama">
                                                REDES SOCIALES
                                            </div>
                                        </div>                                    
                                    <?php } ?>

                                    <?php if($servicio == 'personal') { ?>
                                        <div class="elemento_lista_servicio personalizado activo" id="personalizado">
                                            <div class="tama">
                                                DESARROLLO PERSONALIZADO
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio personalizado" id="personalizado">
                                            <div class="tama">
                                                DESARROLLO PERSONALIZADO
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'equipo') { ?>
                                        <div class="elemento_lista_servicio equipos activo" id="equipos">
                                            <div class="tama">
                                                MANTENIMIENTO DE EQUIPOS
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio equipos" id="equipos">
                                            <div class="tama">
                                                MANTENIMIENTO DE EQUIPOS
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
                                                        <p>Centramos nuestro trabajo en mostrar la imagen corporativa en una web que 
                                                            solucione las necesidades que se demandan.</p>
                                                        <p>Empleamos las más altas tecnologías para dar una mejor experiencia de 
                                                            uso al usuario.</p>
                                                        <p>Desde una sencilla web a una más compleja con todo lujo de detalles, empleamos 
                                                            lenguajes como HTML5, PHP, Javascript, jQuery o CSS3.</p>
                                                        <p>Al margen de lo empleado en las páginas web que creamos, se crea un diseño 
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
                                                        <p>Centramos nuestro trabajo en mostrar la imagen corporativa en una web que 
                                                            solucione las necesidades que se demandan.</p>
                                                        <p>Empleamos las más altas tecnologías para dar una mejor experiencia de 
                                                            uso al usuario.</p>
                                                        <p>Desde una sencilla web a una más compleja con todo lujo de detalles, empleamos 
                                                            lenguajes como HTML5, PHP, Javascript, jQuery o CSS3.</p>
                                                        <p>Al margen de lo empleado en las páginas web que creamos, se crea un diseño 
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
                                                <h3>TIENDAS ONLINE</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/tienda2.jpg" alt="Tiendas Online">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Te ayudamos a impulsar tu negocio con la creación de una tienda online para sacar 
                                                        todo el partido del e-commerce.</p>
                                                    <p>Con plataformas como Prestashop o Magento, usted tendrá su negocio abierto a todas 
                                                        horas y con clientes de todo el mundo con diferentes formas de pago.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>         
                                        <div class="elemento_servicio tiendas">
                                            <div class="titulo_elemento_servicio">
                                                <h3>TIENDAS ONLINE</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/tienda2.jpg" alt="Tiendas Online">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Te ayudamos a impulsar tu negocio con la creación de una tienda online para sacar 
                                                        todo el partido del e-commerce.</p>
                                                    <p>Con plataformas como Prestashop o Magento, usted tendrá su negocio abierto a todas 
                                                        horas y con clientes de todo el mundo con diferentes formas de pago.</p>
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
                                                    <p>Si te gusta escribir, o simplemente tener tu propio canal en el que poder decir lo que 
                                                        piensas al mundo, un blog puede ser tu mejor aliado.</p>
                                                    <p>Podrás tener tu propia página web y una sección de noticias actualizables. Mediante CMS 
                                                        como WordPress, Joomla o Drupal podrás tener tu sitio en el que dar rienda suelta a que 
                                                        tus dedos tecleen lo que se te pase por la cabeza.</p>
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
                                                    <p>Si te gusta escribir, o simplemente tener tu propio canal en el que poder decir lo que 
                                                        piensas al mundo, un blog puede ser tu mejor aliado.</p>
                                                    <p>Podrás tener tu propia página web y una sección de noticias actualizables. Mediante CMS 
                                                        como WordPress, Joomla o Drupal podrás tener tu sitio en el que dar rienda suelta a que 
                                                        tus dedos tecleen lo que se te pase por la cabeza.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'redes') { ?>
                                        <div class="elemento_servicio redes activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>REDES SOCIALES</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/redes_sociales2.jpg" alt="Redes Sociales">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Nos encargamos de la creación y gestión de perfiles en redes sociales para promocionar su 
                                                        negocio y asi otorgarle más visitas.</p>
                                                    <p>Hoy en día estar presente en las redes sociales como Facebook, Twitter, Youtube o Google+ 
                                                        consiguen un trato más familiar con clientes o posibles clientes.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio redes">
                                            <div class="titulo_elemento_servicio">
                                                <h3>REDES SOCIALES</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/redes_sociales2.jpg" alt="Redes Sociales">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Nos encargamos de la creación y gestión de perfiles en redes sociales para promocionar su 
                                                        negocio y asi otorgarle más visitas.</p>
                                                    <p>Hoy en día estar presente en las redes sociales como Facebook, Twitter, Youtube o Google+ 
                                                        consiguen un trato más familiar con clientes o posibles clientes.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'personal') { ?>
                                        <div class="elemento_servicio personalizado activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>DESARROLLO PERSONALIZADO</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/desarrollo_personalizado2.jpg" alt="Desarrollo Personalizado">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Contamos con la más alta tecnología para llevar sus ideas al siguiente nivel.</p>
                                                    <p>Así pues, mediante lenguajes como PHP o Java podemos crear la aplicación 
                                                        que usted necesite para darle un uso concreto.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio personalizado">
                                            <div class="titulo_elemento_servicio">
                                                <h3>DESARROLLO PERSONALIZADO</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/desarrollo_personalizado2.jpg" alt="Desarrollo Personalizado">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Contamos con la más alta tecnología para llevar sus ideas al siguiente nivel.</p>
                                                    <p>Así pues, mediante lenguajes como PHP o Java podemos crear la aplicación 
                                                        que usted necesite para darle un uso concreto.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'equipo') { ?>
                                        <div class="elemento_servicio equipos activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>MANTENIMIENTO DE EQUIPOS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/equipos2.jpg" alt="Mantenimiento de Equipos">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Nos encargamos de tener sus equipos informáticos libres y protegidos contra posibles 
                                                        problemas, haciendo uso de las actualizaciones más recientes.</p>
                                                    <p>Ofrecemos servicios como Sistemas de copia de seguridad, implantación de redes WLAN o LAN, 
                                                        montaje y reparación de equipos entre otros.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio equipos">
                                            <div class="titulo_elemento_servicio">
                                                <h3>MANTENIMIENTO DE EQUIPOS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/equipos2.jpg" alt="Mantenimiento de Eequipos">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>Nos encargamos de tener sus equipos informáticos libres y protegidos contra posibles 
                                                        problemas, haciendo uso de las actualizaciones más recientes.</p>
                                                    <p>Ofrecemos servicios como Sistemas de copia de seguridad, implantación de redes WLAN o LAN, 
                                                        montaje y reparación de equipos entre otros.</p>
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
                                <h3>SÍGUENOS</h3>
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
                        <a href="aviso_legal.php">Aviso Legal</a> | <a href="politica_privacidad.php">Política de Privacidad</a>
                    </div>
                    <div class="bloque">
                        ©AT DISEÑO WEB 2016
                    </div>
                    <div class="clear"></div>
                </div>
            </div>