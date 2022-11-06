
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
                            <li><a href="index.php?lan=en">HOME</a></li>
                            <li><a href="innovacion.php?lan=en">INNOVATION</a></li>
                            <li class="activo"><a href="servicios.php?lan=en">SERVICES</a></li>
                            <li><a href="portfolio.php?lan=en">PORTFOLIO</a></li>
                            <li><a href="consulta.php?lan=en">CONSULT US</a></li>
                            <li><a href="noticias/index.php?lang=en">NEWS</a></li>
                            <li><a href="contacto.php?lan=en">CONTACT</a></li>
                            <div class="clear"></div>                    
                        </ul>
                    </div>
                </div>
                <div class="menu_aparece pc">
                    <div class="contenido_variable">
                        <ul class="menu_principal">
                            <li><a href="index.php?lan=en">HOME</a></li>
                            <li><a href="innovacion.php?lan=en">INNOVATION</a></li>
                            <li class="activo"><a href="servicios.php?lan=en">SERVICES</a></li>
                            <li><a href="portfolio.php?lan=en">PORTFOLIO</a></li>
                            <li><a href="consulta.php?lan=en">CONSULT US</a></li>
                            <li><a href="noticias/index.php?lang=en">NEWS</a></li>
                            <li><a href="contacto.php?lan=en">CONTACT</a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
                <div class="degradado">
                </div>
                <div class="sub_info">
                    <div class="logo">
                        <a href="index.php=lan=en"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="subslider">
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>DESIGN</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>INNOVATION</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>TECHNOLOGY</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>INFORMATION</h3></div>
                        </div>
                        <div class="sub_grupo">
                            <div class="subgrupo_img1"><h3>DEVELOPMENT</h3></div>
                        </div>
                    </div>
                </div>
                <div class="menu pc">
                    <div class="contenido_variable">
                        <ul class="">
                            <li><a href="index.php?lan=en">HOME</a></li>
                            <li><a href="innovacion.php?lan=en">INNOVATION</a></li>
                            <li class="activo"><a href="servicios.php?lan=en">SERVICES</a></li>
                            <li><a href="portfolio.php?lan=en">PORTFOLIO</a></li>
                            <li><a href="consulta.php?lan=en">CONSULT US</a></li>
                            <li><a href="noticias/index.php?lang=en">NEWS</a></li>
                            <li><a href="contacto.php?lan=en">CONTACT</a></li>
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
                                <h1>SERVICES</h1>
                            </div>
                            <div class="contenido_apartado_index">                                
                                <div class="lista_servicios">
                                    <?php if($servicio == 'webs' || $servicio == '') { ?>
                                        <div class="elemento_lista_servicio webs activo" id="webs">
                                            <div class="tama">
                                                CORPORATIVE WEBS
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio webs" id="webs">
                                            <div class="tama">
                                                CORPORATIVE WEBS
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'tiendas') { ?>
                                        <div class="elemento_lista_servicio tiendas activo" id="tiendas">
                                            <div class="tama">
                                                ONLINE SHOPS
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio tiendas" id="tiendas">
                                            <div class="tama">
                                                ONLINE SHOPS
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
                                                SOCIAL NETWORKS
                                            </div>
                                        </div>
                                    <?php } else { ?> 
                                        <div class="elemento_lista_servicio redes" id="redes">
                                            <div class="tama">
                                                SOCIAL NETWORKS
                                            </div>
                                        </div>                                    
                                    <?php } ?>

                                    <?php if($servicio == 'personal') { ?>
                                        <div class="elemento_lista_servicio personalizado activo" id="personalizado">
                                            <div class="tama">
                                                CUSTOM DEVELOPMENT
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio personalizado" id="personalizado">
                                            <div class="tama">
                                                CUSTOM DEVELOPMENT
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'equipo') { ?>
                                        <div class="elemento_lista_servicio equipos activo" id="equipos">
                                            <div class="tama">
                                                MAINTENANCE EQUIPMENT
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_lista_servicio equipos" id="equipos">
                                            <div class="tama">
                                                MAINTENANCE EQUIPMENT
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
                                                    <h3>CORPORATIVE WEBS</h3>
                                                </div>
                                                <div class="contenido_elemento_servicio">
                                                    <div class="imagen_elemento_servicio">
                                                        <img src="img/contenido/web2.jpg" alt="Corporative Webs">
                                                    </div>
                                                    <div class="texto_elemento_servicio">
                                                        <p>We focus our work in corporate image display in a web that solve the 
                                                            needs that are demanded.</p>
                                                        <p>We use the highest technologies to provide a better user experience to the user.</p>
                                                        <p>From a simple website to a complex with great detail, we use languages such 
                                                            as HTML5, PHP, Javascript, jQuery or CSS3.</p>
                                                        <p>Apart from the employee on the websites we create an 'adaptive design is 
                                                            created all kinds of screens.</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio webs">
                                            <div class="imagen_elemento_servicio">
                                                <div class="titulo_elemento_servicio">
                                                    <h3>CORPORATIVE WEBS</h3>
                                                </div>
                                                <div class="contenido_elemento_servicio">
                                                    <div class="imagen_elemento_servicio">
                                                        <img src="img/contenido/web2.jpg" alt="Corporative Webs">
                                                    </div>
                                                    <div class="texto_elemento_servicio">
                                                        <p>We focus our work in corporate image display in a web that solve the 
                                                            needs that are demanded.</p>
                                                        <p>We use the highest technologies to provide a better user experience to the user.</p>
                                                        <p>From a simple website to a complex with great detail, we use languages such 
                                                            as HTML5, PHP, Javascript, jQuery or CSS3.</p>
                                                        <p>Apart from the employee on the websites we create an 'adaptive design is 
                                                            created all kinds of screens.</p>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'tiendas') { ?>            
                                        <div class="elemento_servicio tiendas activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>ONLINE SHOPS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/tienda2.jpg" alt="Online Shops">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We help you boost your business with the creation of an online store to take full 
                                                        advantage of e-commerce.</p>
                                                    <p>With platforms like Magento Prestashop or you you will have your open at all hours 
                                                        and with customers around the world with different forms of payment business.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>         
                                        <div class="elemento_servicio tiendas">
                                            <div class="titulo_elemento_servicio">
                                                <h3>ONLINE SHOPS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/tienda2.jpg" alt="Online Shops">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We help you boost your business with the creation of an online store to take full 
                                                        advantage of e-commerce.</p>
                                                    <p>With platforms like Magento Prestashop or you you will have your open at all hours 
                                                        and with customers around the world with different forms of payment business.</p>
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
                                                    <p>If you like writing, or just having your own channel on which to say what you think the 
                                                        world, a blog can be your best ally.</p>
                                                    <p>You can have your own website and updateable news section. By CMS like WordPress, Joomla 
                                                        or Drupal you can have your place to give your fingers loose what you typed into your head rein.</p>
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
                                                    <p>If you like writing, or just having your own channel on which to say what you think the 
                                                        world, a blog can be your best ally.</p>
                                                    <p>You can have your own website and updateable news section. By CMS like WordPress, Joomla 
                                                        or Drupal you can have your place to give your fingers loose what you typed into your head rein.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'redes') { ?>
                                        <div class="elemento_servicio redes activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>SOCIAL NETWORKS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/redes_sociales2.jpg" alt="Social Networks">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We handle the creation and management of social networking profiles to promote your business 
                                                        and thus give more visits.</p>
                                                    <p>Today be present in social networks like Facebook, Twitter, Youtube or Google get more 
                                                        familiar dealing with customers or potential customers.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio redes">
                                            <div class="titulo_elemento_servicio">
                                                <h3>SOCIAL NETWORKS</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/redes_sociales2.jpg" alt="Social Networks">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We handle the creation and management of social networking profiles to promote your business 
                                                        and thus give more visits.</p>
                                                    <p>Today be present in social networks like Facebook, Twitter, Youtube or Google get more 
                                                        familiar dealing with customers or potential customers.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'personal') { ?>
                                        <div class="elemento_servicio personalizado activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>CUSTOM DEVELOPMENT</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/desarrollo_personalizado2.jpg" alt="Custom Development">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We have the latest technology to bring their ideas to the next level.</p>
                                                    <p>Thus, by languages like PHP or Java you can create the application you 
                                                        need to give a specific use.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio personalizado">
                                            <div class="titulo_elemento_servicio">
                                                <h3>CUSTOM DEVELOPMENT</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/desarrollo_personalizado2.jpg" alt="Custom Development">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We have the latest technology to bring their ideas to the next level.</p>
                                                    <p>Thus, by languages like PHP or Java you can create the application you 
                                                        need to give a specific use.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if($servicio == 'equipo') { ?>
                                        <div class="elemento_servicio equipos activo">
                                            <div class="titulo_elemento_servicio">
                                                <h3>MAINTENANCE EQUIPMENT</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/equipos2.jpg" alt="Maintenance Equipment">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We take care of having their free computers and protected against possible 
                                                        problems by making use of the latest updates.</p>
                                                    <p>We offer services such as backup systems, deployment of WLAN or LAN, 
                                                        assembly and repair of equipment among others.</p>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="elemento_servicio equipos">
                                            <div class="titulo_elemento_servicio">
                                                <h3>MAINTENANCE EQUIPMENT</h3>
                                            </div>
                                            <div class="contenido_elemento_servicio">
                                                <div class="imagen_elemento_servicio">
                                                    <img src="img/contenido/equipos2.jpg" alt="Maintenance Equipment">
                                                </div>
                                                <div class="texto_elemento_servicio">
                                                    <p>We take care of having their free computers and protected against possible 
                                                        problems by making use of the latest updates.</p>
                                                    <p>We offer services such as backup systems, deployment of WLAN or LAN, 
                                                        assembly and repair of equipment among others.</p>
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
                                <h3>CONTACT</h3>
                            </div>
                            <div class="contenido_apartado_contacto">
                                <ul>
                                    <li>Address: Porto do Son</li>
                                    <li>Telf: <a href="tel:999999999">999 999 999</a></li>
                                    <li>Email: <a href="mailto:adri.13a@gmail.com">adri.13a@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="apartado_contacto_index">
                            <div class="titulo_apartado_contacto">
                                <h3>FOLLOW US</h3>
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
                                <h3>LATEST TWEETS</h3>
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
                        <a href="aviso_legal.php?lan=en">Legal Warning</a> | <a href="politica_privacidad.php?lan=en">Privacy Policy</a>
                    </div>
                    <div class="bloque">
                        ©AT DISEÑO WEB 2016
                    </div>
                    <div class="clear"></div>
                </div>
            </div>