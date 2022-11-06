<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
$idioma = $_GET['lan'];

if($idioma == 'es' || $idioma == '') { ?>
    <!DOCTYPE html>
    <html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>PORTFOLIO - AT DISEÑO WEB</title>
        <link rel="stylesheet" href="css/cookie.css" />
        <link rel="shortcut icon" href="img/favicon.png">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script src="js/menu_emergente.js" type="text/javascript"></script>
    
        <?php
        if ($deviceType == 'computer' ){ ?>
        <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
        <?php }

        if ($deviceType == 'tablet' ) { ?>
            <link rel="stylesheet" type="text/css" href="css/tablet.css"/>

        <?php
        } if ($deviceType == 'phone' ){ ?>
            <link rel="stylesheet" type="text/css" href="css/movil.css" />

        <?php  } ?>
        <!--[if lt IE 9]> <link href="css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]--> 

        <meta name="description" content="Programación y diseño web. Soluciones tecnológicas">
        <meta name="keywords" content="Programación y diseño web, programación software, marketing online, soluciones tecnológicas">
        <meta name="author" content="AT Diseño Web">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@AT_DWEB">
        <meta name="twitter:title" content="AT Diseño Web">
        <meta name="twitter:description" content="Programación y diseño web, programación software, marketing online, soluciones tecnológicas">
        <meta name="twitter:creator" content="@AT_DWEB">
        <!-- Twitter Summary card images must be at least 200x200px -->
        <meta name="twitter:image" content="meta/portfolio.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="AT Diseño Web" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://adriproba.esy.es/" />
        <meta property="og:image" content="meta/portfolio.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:description" content="Programación y diseño web, programación software, marketing online, soluciones tecnológicas" />
        <meta property="og:site_name" content="AT Diseño Web" />
    </head>
    <body>
        <div class="aviso_internet" id="aviso_internet">
            <div class="logo_contenido">
                <img src="img/iconos/logo.png" alt="logo"/>
            </div>
            <p>Sentimos advertirle de que su navegador web no está actualizado.</p>
            <p>La web a la que intenta acceder utiliza las últimas tecnologías para crear una experiencia de usuario única por ser
            compatible únicamente con las últimas actualizaciones de los navegadores web más usados. Para descargarse las últimas
            versiones de estos navegadores, por favor, escoja en la lista su navegador favorito y descárguelo.</p>
            <ul>
                <li><a href="https://www.google.es/chrome/browser/desktop/index.html">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
                <li><a href="http://support.apple.com/es_ES/downloads/#safari">Safari</a></li>
                <li><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Internet Explorer</a></li>
            </ul>
            <p>Muchas Gracias.</p>
        </div>
        
        <div class="container">
            <?php include "lng/es/cuerpo_portfolio.php"; ?>
        </div>

    </body>
</html>
 
<?php } 
if($idioma == 'en') { ?>
    <!DOCTYPE html>
    <html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>PORTFOLIO - AT DISEÑO WEB</title>
        <link rel="stylesheet" href="css/cookie.css" />
        <link rel="shortcut icon" href="img/favicon.png">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script src="js/menu_emergente.js" type="text/javascript"></script>
    
        <?php
        if ($deviceType == 'computer' ){ ?>
        <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
        <?php }

        if ($deviceType == 'tablet' ) { ?>
            <link rel="stylesheet" type="text/css" href="css/tablet.css"/>

        <?php
        } if ($deviceType == 'phone' ){ ?>
            <link rel="stylesheet" type="text/css" href="css/movil.css" />

        <?php  } ?>
        <!--[if lt IE 9]> <link href="css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]--> 

        <meta name="description" content="Programming and web design. Technological solutions">
        <meta name="keywords" content="Programming and web design. Programming technological solutions and web design, software programming, online marketing, technology solutions">
        <meta name="author" content="AT Diseño Web">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@AT_DWEB">
        <meta name="twitter:title" content="AT Diseño Web">
        <meta name="twitter:description" content="Programming and web design. Programming technological solutions and web design, software programming, online marketing, technology solutions">
        <meta name="twitter:creator" content="@AT_DWEB">
        <!-- Twitter Summary card images must be at least 200x200px -->
        <meta name="twitter:image" content="meta/portfolio.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="AT Diseño Web" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://adriproba.esy.es/" />
        <meta property="og:image" content="meta/portfolio.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:description" content="Programming and web design. Programming technological solutions and web design, software programming, online marketing, technology solutions" />
        <meta property="og:site_name" content="AT Diseño Web" />
    </head>
    <body>
        <div class="aviso_internet" id="aviso_internet">
            <div class="logo_contenido">
                <img src="img/iconos/logo.png" alt="logo"/>
            </div>
            <p>Sorry warn that your web browser is out of date.</p>
            <p>The website you are trying to access using the latest technologies to create a unique user experience by only supports the latest updates of the most used web browsers. To download the latest versions of these browsers, please choose from the list, and download your favorite browser.</p>
            <ul>
                <li><a href="https://www.google.es/chrome/browser/desktop/index.html">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
                <li><a href="http://support.apple.com/es_ES/downloads/#safari">Safari</a></li>
                <li><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Internet Explorer</a></li>
            </ul>
            <p>Thank you.</p>
        </div> 
        
        <div class="container">
            <?php include "lng/en/cuerpo_portfolio.php"; ?>
        </div>

    </body>
</html>

<?php }
if($idioma == 'gl') { ?>
    <!DOCTYPE html>
    <html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>PORTFOLIO - AT DISEÑO WEB</title>
        <link rel="stylesheet" href="css/cookie.css" />
        <link rel="shortcut icon" href="img/favicon.png">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/cookie.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script src="js/menu_emergente.js" type="text/javascript"></script>
    
        <?php
        if ($deviceType == 'computer' ){ ?>
        <link rel="stylesheet" type="text/css" href="css/desktop.css"/>
        <?php }

        if ($deviceType == 'tablet' ) { ?>
            <link rel="stylesheet" type="text/css" href="css/tablet.css"/>

        <?php
        } if ($deviceType == 'phone' ){ ?>
            <link rel="stylesheet" type="text/css" href="css/movil.css" />

        <?php  } ?>
        <!--[if lt IE 9]> <link href="css/ie_ko.css" rel="stylesheet" type="text/css"> <![endif]--> 

        <meta name="description" content="Programación e deseño web. Solucións tecnolóxicas">
        <meta name="keywords" content="Programación e deseño web, programación software, marketing online, solucións tecnolóxicas">
        <meta name="author" content="AT Diseño Web">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@AT_DWEB">
        <meta name="twitter:title" content="AT Diseño Web">
        <meta name="twitter:description" content="Programación e deseño web, programación software, marketing online, solucións tecnolóxicas">
        <meta name="twitter:creator" content="@AT_DWEB">
        <!-- Twitter Summary card images must be at least 200x200px -->
        <meta name="twitter:image" content="meta/portfolio.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="AT Diseño Web" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://adriproba.esy.es/" />
        <meta property="og:image" content="meta/portfolio.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:description" content="Programación e deseño web, programación software, marketing online, solucións tecnolóxicas" />
        <meta property="og:site_name" content="AT Diseño Web" />
    </head>
    <body>
        <div class="aviso_internet" id="aviso_internet">
            <div class="logo_contenido">
                <img src="img/iconos/logo.png" alt="logo"/>
            </div>
            <p>Sentimos advertilo de que o seu navegador web non está actualizado.</p>
            <p>A web á que intenta acceder utiliza as últimas tecnoloxías para crear unha experiencia de usuario única por ser
            compatible únicamente coas últimas actualizacións dos navegadores web máis usados. Para descargarse as últimas
            versións destos navegadores, por favor, escolla na lista o seu navegador favorito e descárgueo.</p>
            <ul>
                <li><a href="https://www.google.es/chrome/browser/desktop/index.html">Google Chrome</a></li>
                <li><a href="https://www.mozilla.org/es-ES/firefox/new/">Mozilla Firefox</a></li>
                <li><a href="http://support.apple.com/es_ES/downloads/#safari">Safari</a></li>
                <li><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie">Internet Explorer</a></li>
            </ul>
            <p>Muchas Gracias.</p>
        </div>
        
        <div class="container">
            <?php include "lng/gl/cuerpo_portfolio.php"; ?>
        </div>

    </body>
</html>

<?php } ?> 