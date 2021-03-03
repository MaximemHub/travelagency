<?php
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
define( 'DB_NAME', 'travelagency' );

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
define( 'AUTH_KEY',         'Q!zo/3gIC9^wnZGxXb^%%1IcH~2*90b3l]OP=_o&l]SxiZl!i`b[:^_iT/}9&z6`' );
define( 'SECURE_AUTH_KEY',  'a$k?6/}N+wW>?bOB +i)j5Bt,:08.ek`UHjf]igqMqU(a/-:?%/SR5qyOy&u!9mw' );
define( 'LOGGED_IN_KEY',    'w_K~urgI?_@v{aQ$j1%zw;%UO-]N% M)`q,)hRgxA|:1Th?PNQEuimfZL~O(}w,#' );
define( 'NONCE_KEY',        ':x3-<Df3>j]vWu /}HmEYMes!Ar/k/dBp|.KvJ8=U-+rI!G)^KiO{O-lhs[ 73Y{' );
define( 'AUTH_SALT',        'L>s]+35Xq;7X}3hPSz]!qbFTsiqmkX^,}!qJ?@{1u?x[ q~A&xii^^V(hEn`64^Q' );
define( 'SECURE_AUTH_SALT', ':e{9W>h*)_5,hS,lsXd=ll-nu;&g]Q:9Ab6T/0$^%%grvTkh9=e*4=$S}J)5|oj}' );
define( 'LOGGED_IN_SALT',   'Q2C6E,fXQfg2;c{1~e=m)S|x.lf+{/Q+wG&WF#c03F_g7YG}Vu!lX^T|aCCWaRho' );
define( 'NONCE_SALT',       '(P.:vwlXEo./YnKMlOEPar~-vfU4tGK=]gKw6/c*(pHCa849Qn$qI^}!nE]JnK93' );
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
