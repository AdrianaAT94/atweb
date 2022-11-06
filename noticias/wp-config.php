<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'noticias');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '*:d#IAy ,]`HRm3Y^|BYl^A(V,6_p&1%$gxYg{&=>o88=D#*]sN#/0f$({a1qTBZ');
define('SECURE_AUTH_KEY', 'C=D4j@eBTX*&$@fi;bixW%IXGE)LvIwiUm+`VqxL`Jfw Zc;|)DR>l*JoIy_s*4t');
define('LOGGED_IN_KEY', '(F3Blq&A&,2N3wIWDYe0Y-ok!mH{&]ip:bt){bQDk#9v/o=O3E&k_7bM1^O}N1p<');
define('NONCE_KEY', 'eE >S$><)#rXsfryxM&A2yD$F0}?J).h10z5EKC!4?@0h^;sd8:-t*uc^i3phSE2');
define('AUTH_SALT', 'aq1e>H=qLbKq*d9TeaPb=+?:U@X6a&]bRA#M4l)8a<%ZP`?)RcyFQ5MXDU3b6LIQ');
define('SECURE_AUTH_SALT', '--c@I;B+>rXchdO%A7O}dhe<dp=kW~7lz||q)6H$5YqD|#|;iGRY*}<ItBV`{0_0');
define('LOGGED_IN_SALT', '<JNCJi+KgXVA1zf+p7wHOK]ouNnqq[oLa]W%a}|hH(Pb1WFXd8 LLAO|nmXDm/=?');
define('NONCE_SALT', 'm6xw3M2pN=/RIU0zm:&H|4)]lf%:xe:^hcIO|+]+UA?nPDLH0F<k%1wqwTHA/x!E');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'notis_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

