<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ASOC' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '?@=d^#`#9${N!7BszTy^!VB:j{OB0:7D=57(>F$+OT$t6!r!a9t#vQ[lVzUq@Zv~' );
define( 'SECURE_AUTH_KEY',  '{.Se,%Rq,;;tS{D;aZpyeh!7[{SEdhu-%gHlX]CtX.PAyZCywPL^$K0fXD]5|M+1' );
define( 'LOGGED_IN_KEY',    'vZj`CEg=Qcy^7ex-v}?FQrp/;7VA:c@o{fh>_IL^sF[}VC:_-l-jTlNo9 I8]^hH' );
define( 'NONCE_KEY',        'QxZ`^0!j)AT8~P%%3wuZC:;BO{&n+qN-1sCmUt(+]BZX7^r,nryP{,^xo%M=m.$L' );
define( 'AUTH_SALT',        'S<<|l-d8s58ekiCN?dxvKKQyw7J|BI(%W[i=W-IA[PgZJ:xZgRU_Rr%yi`s8oIyX' );
define( 'SECURE_AUTH_SALT', '`Fn-Zb@/Xp:h?]%Awz&*ssW&6ni_`yUf+D[(:PK^nO1JM($sidOfpc8YgDDOz*^L' );
define( 'LOGGED_IN_SALT',   'HGCPNI`FR9KVN%WW:X y9@@)g0=FC0+P@,d]e0|J<}OCU?V6DBK{[cRz)Wi+f,RV' );
define( 'NONCE_SALT',       '+f[D&o}S/+%%]AztBr0Wse]&V3 .kky/5Cw!+P?96evmaPl[wQV^j]A@e|eBTUnc' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
