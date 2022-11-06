<?php

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
$idioma = $_GET['lang'];
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Noticias
 * @since Noticias 1.0
 */
?>
<?php 
if($idioma == 'es' || $idioma == '') { ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="/webs/atweb/img/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cookie.css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/funciones.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu_emergente.js" type="text/javascript"></script>
    <link rel="shortcut icon"href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

    <?php
    if ($deviceType == 'computer' ){ ?>
    	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/desktop.css"/>
    <?php }
    if ($deviceType == 'tablet' ) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tablet.css"/>
    <?php
    } if ($deviceType == 'phone' ){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/movil.css" />
    <?php  } ?>
    <!--[if lt IE 9]> <link href="<?php echo get_template_directory_uri(); ?>/css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]--> 

	<!--<meta name="description" content="Programación apps en Santiago de Compostela. Programación y diseño web en Santiago de Compostela. Soluciones tecnológicas">
    <meta name="keywords" content="Programación apps, programación y diseño web, programación software, marketing online, soluciones tecnológicas en Santiago de Compostela">
    <meta name="author" content="evelb">
    <!-- Twitter Card data -->
    <!--<meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@evelbTecnicas">
    <meta name="twitter:title" content="evelb Técnicas y Sistemas">
    <meta name="twitter:description" content="Programación apps, programación y diseño web, programación software, marketing online, soluciones tecnológicas en Santiago de Compostela">
    <meta name="twitter:creator" content="@evelbTecnicas">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <!--<meta name="twitter:image" content="http://evelb.es/imagenes_meta/evelb_index.png">

    <!-- Open Graph data -->
    <!--<meta property="og:title" content="evelb Técnicas y Sistemas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://evelb.es/" />
    <meta property="og:image" content="http://evelb.es/imagenes_meta/evelb_index.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="Programación apps, programación y diseño web, programación software, marketing online, soluciones tecnológicas en Santiago de Compostela" />
    <meta property="og:site_name" content="evelb Técnicas y Sistemas" />-->

</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="hfeed site">-->
<div class="container">
    <div class="lng">
        <div class="contenido_variable">
            <div class="zona_social">
                <div class="rs_fb" style="visibility:hidden">
                    <a href="#">
                        <img src="/webs/atweb/img/iconos/fb.png" alt="FB">
                    </a>
                </div>
                <div class="rs_tw">
                    <a href="https://twitter.com/AT_DWEB" target="_blank">
                        <img src="/webs/atweb/img/iconos/tw.png" alt="TW">
                    </a>
                </div>
                <div class="rs_gp" style="visibility:hidden">
                    <a href="#">
                        <img src="/webs/atweb/img/iconos/g+.png" alt="G+">
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="idiomas">
                <div class="lng_gl">
                    <a href="?lang=gl">
                        <img src="/webs/atweb/img/iconos/gl.png" alt="GL">
                    </a>
                </div>
                <div class="lng_esp">
                    <a href="?lang=es">
                        <img src="/webs/atweb/img/iconos/es.png" alt="ES">
                    </a>
                </div>
                <div class="lng_en">
                    <a href="?lang=en">
                        <img src="/webs/atweb/img/iconos/en.png" alt="EN">
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
                <img src="/webs/atweb/img/iconos/menu.png" alt="menu">
            </div>

            <div class="contenido_menu_movil">
                <ul>                    
                    <li><a href="/webs/atweb/index.php">INICIO</a></li>
                    <li><a href="/webs/atweb/innovacion.php">INNOVACIÓN</a></li>
                    <li><a href="/webs/atweb/servicios.php">SERVICIOS</a></li>
                    <li><a href="/webs/atweb/portfolio.php">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php">CONSULTANOS</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/">NOTICIAS</a></li>
                    <li><a href="/webs/atweb/contacto.php">CONTACTO</a></li>
                    <div class="clear"></div>                    
                </ul>
            </div>
        </div>
        <div class="menu_aparece pc">
            <div class="contenido_variable">
                <ul class="menu_principal">
                    <li><a href="/webs/atweb/index.php">INICIO</a></li>
                    <li><a href="/webs/atweb/innovacion.php">INNOVACIÓN</a></li>
                    <li><a href="/webs/atweb/servicios.php">SERVICIOS</a></li>
                    <li><a href="/webs/atweb/portfolio.php">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php">CONSULTANOS</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/">NOTICIAS</a></li>
                    <li><a href="/webs/atweb/contacto.php">CONTACTO</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="degradado">
        </div>
        <div class="sub_info">
            <div class="logo">
                <a href="/webs/atweb/index.php"><img src="/webs/atweb/img/logo.png" alt="logo"></a>
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
                    <li><a href="/webs/atweb/index.php">INICIO</a></li>
                    <li><a href="/webs/atweb/innovacion.php">INNOVACIÓN</a></li>
                    <li><a href="/webs/atweb/servicios.php">SERVICIOS</a></li>
                    <li><a href="/webs/atweb/portfolio.php">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php">CONSULTANOS</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/">NOTICIAS</a></li>
                    <li><a href="/webs/atweb/contacto.php">CONTACTO</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>

<?php if($idioma == 'en') { ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="/webs/atweb/img/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cookie.css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/funciones.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu_emergente.js" type="text/javascript"></script>

    <?php
    if ($deviceType == 'computer' ){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/desktop.css"/>
    <?php }
    if ($deviceType == 'tablet' ) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tablet.css"/>
    <?php
    } if ($deviceType == 'phone' ){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/movil.css" />
    <?php  } ?>
    <!--[if lt IE 9]> <link href="<?php echo get_template_directory_uri(); ?>/css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]--> 

    <!--<meta name="description" content="Apps programming in Santiago de Compostela. Web Programming and web design in Santiago de Compostela. Technological solutions">
        <meta name="keywords" content="Apps programming, web programming and web design, software programming, marketing online, technological solutions in Santiago de Compostela">
        <meta name="author" content="evelb">
        <!-- Twitter Card data -->
        <!--<meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@evelbTecnicas">
        <meta name="twitter:title" content="evelb Técnicas y Sistemas">
        <meta name="twitter:description" content="Apps programming, web programming and web design, software programming, marketing online, technological solutions in Santiago de Compostela">
        <meta name="twitter:creator" content="@evelbTecnicas">
        <!-- Twitter Summary card images must be at least 200x200px -->
        <!--<meta name="twitter:image" content="http://evelb.es/imagenes_meta/evelb_index.png">

        <!-- Open Graph data -->
        <!--<meta property="og:title" content="evelb Técnicas y Sistemas" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://evelb.es/?lan=en" />
        <meta property="og:image" content="http://evelb.es/imagenes_meta/evelb_index.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:description" content="Apps programming, web programming and web design, software programming , marketing online, technological solutions in Santiago de Compostela" />
        <meta property="og:site_name" content="evelb Técnicas y Sistemas" />-->

</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="hfeed site">-->
<div class="container">
    <div class="lng">
        <div class="contenido_variable">
            <div class="zona_social">
                <div class="rs_fb" style="visibility:hidden">
                    <a href="#">
                        <img src="/webs/atweb/img/iconos/fb.png" alt="FB">
                    </a>
                </div>
                <div class="rs_tw">
                    <a href="https://twitter.com/AT_DWEB" target="_blank">
                        <img src="/webs/atweb/img/iconos/tw.png" alt="TW">
                    </a>
                </div>
                <div class="rs_gp" style="visibility:hidden">
                    <a href="#">
                        <img src="/webs/atweb/img/iconos/g+.png" alt="G+">
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="idiomas">
                <div class="lng_gl">
                    <a href="?lang=gl">
                        <img src="/webs/atweb/img/iconos/gl.png" alt="GL">
                    </a>
                </div>
                <div class="lng_esp">
                    <a href="?lang=es">
                        <img src="/webs/atweb/img/iconos/es.png" alt="ES">
                    </a>
                </div>
                <div class="lng_en">
                    <a href="?lang=en">
                        <img src="/webs/atweb/img/iconos/en.png" alt="EN">
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
                <img src="/webs/atweb/img/iconos/menu.png" alt="menu">
            </div>

            <div class="contenido_menu_movil">
                <ul>                    
                    <li><a href="/webs/atweb/index.php?lan=en">HOME</a></li>
                    <li><a href="/webs/atweb/innovacion.php?lan=en">INNOVATION</a></li>
                    <li><a href="/webs/atweb/servicios.php?lan=en">SERVICES</a></li>
                    <li><a href="/webs/atweb/portfolio.php?lan=en">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php?lan=en">CONSULT US</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/index.php?lang=en">NEWS</a></li>
                    <li><a href="/webs/atweb/contacto.php?lan=en">CONTACT</a></li>
                    <div class="clear"></div>                    
                </ul>
            </div>
        </div>
        <div class="menu_aparece pc">
            <div class="contenido_variable">
                <ul class="menu_principal">
                    <li><a href="/webs/atweb/index.php?lan=en">HOME</a></li>
                    <li><a href="/webs/atweb/innovacion.php?lan=en">INNOVATION</a></li>
                    <li><a href="/webs/atweb/servicios.php?lan=en">SERVICES</a></li>
                    <li><a href="/webs/atweb/portfolio.php?lan=en">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php?lan=en">CONSULT US</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/index.php?lang=en">NEWS</a></li>
                    <li><a href="/webs/atweb/contacto.php?lan=en">CONTACT</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="degradado">
        </div>
        <div class="sub_info">
            <div class="logo">
                <a href="/webs/atweb/index.php?lan=en"><img src="/webs/atweb/img/logo.png" alt="logo"></a>
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
                    <li><a href="/webs/atweb/index.php?lan=en">HOME</a></li>
                    <li><a href="/webs/atweb/innovacion.php?lan=en">INNOVATION</a></li>
                    <li><a href="/webs/atweb/servicios.php?lan=en">SERVICES</a></li>
                    <li><a href="/webs/atweb/portfolio.php?lan=en">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php?lan=en">CONSULT US</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/index.php?lang=en">NEWS</a></li>
                    <li><a href="/webs/atweb/contacto.php?lan=en">CONTACT</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>

<?php 
if($idioma == 'gl') { ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="/webs/atweb/img/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cookie.css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/funciones.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/menu_emergente.js" type="text/javascript"></script>

    <?php
    if ($deviceType == 'computer' ){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/desktop.css"/>
    <?php }
    if ($deviceType == 'tablet' ) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tablet.css"/>
    <?php
    } if ($deviceType == 'phone' ){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/movil.css" />
    <?php  } ?>
    <!--[if lt IE 9]> <link href="<?php echo get_template_directory_uri(); ?>/css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]--> 

    <!--<meta name="description" content="Programación apps en Santiago de Compostela. Programación y diseño web en Santiago de Compostela. Soluciones tecnológicas">
    <meta name="keywords" content="Programación apps, programación y diseño web, programación software, marketing online, soluciones tecnológicas en Santiago de Compostela">
    <meta name="author" content="evelb">
    <!-- Twitter Card data -->
    <!--<meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@evelbTecnicas">
    <meta name="twitter:title" content="evelb Técnicas y Sistemas">
    <meta name="twitter:description" content="Programación apps, programación y diseño web, programación software, marketing online, soluciones tecnológicas en Santiago de Compostela">
    <meta name="twitter:creator" content="@evelbTecnicas">
    <!-- Twitter Summary card images must be at least 200x200px -->
    <!--<meta name="twitter:image" content="http://evelb.es/imagenes_meta/evelb_index.png">

    <!-- Open Graph data -->
    <!--<meta property="og:title" content="evelb Técnicas y Sistemas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://evelb.es/" />
    <meta property="og:image" content="http://evelb.es/imagenes_meta/evelb_index.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:description" content="Programación apps, programación y diseño web, programación software, marketing online, soluciones tecnológicas en Santiago de Compostela" />
    <meta property="og:site_name" content="evelb Técnicas y Sistemas" />-->

</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="hfeed site">-->
<div class="container">
    <div class="lng">
        <div class="contenido_variable">
            <div class="zona_social">
                <div class="rs_fb" style="visibility:hidden">
                    <a href="#">
                        <img src="/webs/atweb/img/iconos/fb.png" alt="FB">
                    </a>
                </div>
                <div class="rs_tw">
                    <a href="https://twitter.com/AT_DWEB" target="_blank">
                        <img src="/webs/atweb/img/iconos/tw.png" alt="TW">
                    </a>
                </div>
                <div class="rs_gp" style="visibility:hidden">
                    <a href="#">
                        <img src="/webs/atweb/img/iconos/g+.png" alt="G+">
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="idiomas">
                <div class="lng_gl">
                    <a href="?lang=gl">
                        <img src="/webs/atweb/img/iconos/gl.png" alt="GL">
                    </a>
                </div>
                <div class="lng_esp">
                    <a href="?lang=es">
                        <img src="/webs/atweb/img/iconos/es.png" alt="ES">
                    </a>
                </div>
                <div class="lng_en">
                    <a href="?lang=en">
                        <img src="/webs/atweb/img/iconos/en.png" alt="EN">
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
                <img src="/webs/atweb/img/iconos/menu.png" alt="menu">
            </div>

            <div class="contenido_menu_movil">
                <ul>                    
                    <li><a href="/webs/atweb/index.php?lan=gl">INICIO</a></li>
                    <li><a href="/webs/atweb/innovacion.php?lan=gl">INNOVACIÓN</a></li>
                    <li><a href="/webs/atweb/servicios.php?lan=gl">SERVIZOS</a></li>
                    <li><a href="/webs/atweb/portfolio.php?lan=gl">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php?lan=gl">CONSULTANOS</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/index.php?lang=gl">NOVAS</a></li>
                    <li><a href="/webs/atweb/contacto.php?lan=gl">CONTACTO</a></li>
                    <div class="clear"></div>                    
                </ul>
            </div>
        </div>
        <div class="menu_aparece pc">
            <div class="contenido_variable">
                <ul class="menu_principal">
                    <li><a href="/webs/atweb/index.php?lan=gl">INICIO</a></li>
                    <li><a href="/webs/atweb/innovacion.php?lan=gl">INNOVACIÓN</a></li>
                    <li><a href="/webs/atweb/servicios.php?lan=gl">SERVIZOS</a></li>
                    <li><a href="/webs/atweb/portfolio.php?lan=gl">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php?lan=gl">CONSULTANOS</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/index.php?lang=gl">NOVAS</a></li>
                    <li><a href="/webs/atweb/contacto.php?lan=gl">CONTACTO</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="degradado">
        </div>
        <div class="sub_info">
            <div class="logo">
                <a href="/webs/atweb/index.php?lan=gl"><img src="/webs/atweb/img/logo.png" alt="logo"></a>
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
                    <li><a href="/webs/atweb/index.php?lan=gl">INICIO</a></li>
                    <li><a href="/webs/atweb/innovacion.php?lan=gl">INNOVACIÓN</a></li>
                    <li><a href="/webs/atweb/servicios.php?lan=gl">SERVIZOS</a></li>
                    <li><a href="/webs/atweb/portfolio.php?lan=gl">PORTFOLIO</a></li>
                    <li><a href="/webs/atweb/consulta.php?lan=gl">CONSULTANOS</a></li>
                    <li class="activo"><a href="/webs/atweb/noticias/index.php?lang=gl">NOVAS</a></li>
                    <li><a href="/webs/atweb/contacto.php?lan=gl">CONTACTO</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>

	<!--<div id="content" class="site-content">-->
    <div class="contenido">
