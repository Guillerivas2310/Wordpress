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
define( 'DB_NAME', 'wordpress' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'Guillermo' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', '!x!O4V[kKiAD#C +e*a >BJ52<$nh0>W}t5]*O|`-G+1IVot:.Zenv3E}g=7>N@0' );
define( 'SECURE_AUTH_KEY', 'Fy>*~>gW,+~a.XeYo1S$`rp|jmjz`*_,Emu:iVQ-vVEmC2Sn6_(G_5N 8q%3H<&.' );
define( 'LOGGED_IN_KEY', 'jUkiX%H{^(/W% |%}EyCW3a)scmysJc{V}>m:X ;J[Jcxzj-^vdHn_&ilUF_%1Hs' );
define( 'NONCE_KEY', '!*+rh-&W[I}CS?{d-|d_*oakH~CK5xmh8:2gg+EvX;vAJGmk>)pl*c?M&* <^<]l' );
define( 'AUTH_SALT', 'ei<{_Pz]>/->B^*cI(#V[P1r%lR=9p`a?k=;6l:k5w~wgBT=VsRrEeeGI`,a|$A:' );
define( 'SECURE_AUTH_SALT', '}U~Q+AA$.ty{+x!j:zk)$ox^Wxnv:RT.=SDrE>Nqi)-E!EYzbumTY{6OYn#2.E} ' );
define( 'LOGGED_IN_SALT', '-Nkw9<h{7KVSszQS*N3CR$mG;0%P%Az.;m+g];SZejgu:/&Dnq0{UE78ZIN{;)g0' );
define( 'NONCE_SALT', 'w J(Q%bvCb$h|/u5D: @!7Qp5NQ(;5o?rQ6?2Z{k/@lGaoo0^eQBN*FL4xqV/`l3' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

