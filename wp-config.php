<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'basecom' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-6Utkb{1V]CLf1=^O77$N]V+3mlxe3[:>[*Ir6<{x0z;n2sfUFIs:?FWLA38Xnk0' );
define( 'SECURE_AUTH_KEY',  '(:AAzb|[Ytb(WptO=V}DB,TA!jz=*`6w:PM2$kJWy/ %^)psi@MFfPh1E~t-X0ae' );
define( 'LOGGED_IN_KEY',    'k9>,Ef|6}31&=E,qfE|j*@iYISskIFObLxFT-w`?y_Ls3Ni=_#QZA88wd!61K44y' );
define( 'NONCE_KEY',        '`{g^%jpAf2%@bX1HJas,#iPH[4y=.F%-C$OFRHcwi&_>6PBShPlKrYK`>O;~L3Nm' );
define( 'AUTH_SALT',        'f)Gg<gB%z1;$GDy),^f8J!0|KMsm=,RI R0!G`Yj6nuB3_Y#DFpn&L_R)n#&,>/s' );
define( 'SECURE_AUTH_SALT', 'U^BBY{|3d3Bzf(p} ;e[RbDo3FuoAQ6(v /MbZ/d O+yOdp}ZF]FU>_SIZtv4g0#' );
define( 'LOGGED_IN_SALT',   'UFRLECGw^m/%UZ:O]hJ#L6Jad7@AGTb~lEiu#Q9!jv{C@4#dTZ4qQ|4L4Y]rQH~w' );
define( 'NONCE_SALT',       'h2wfO3S}>?}v8]r|3}%cAE62J4d;kXm|V6iu[+4#)T0YACYsMk@3%^*n4%hd_]Ss' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
