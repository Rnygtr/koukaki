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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?i&j3T1Tdn(%,?CX|=bxjf-|`,?${yD9==t|@uy<oT{lhdPN-g]/tk/tt}9y6rA9' );
define( 'SECURE_AUTH_KEY',  '} DG>l8Nm_C4z;CwZ9o=&FH1c=N>t7nEfo~AV?v>]Bjx_6me~kPksJ@[W^!>J:h0' );
define( 'LOGGED_IN_KEY',    'A 8.leJKa<6^cn)U1}qNEzF(57Z_RAH{*Q{/B75I|iYvyli2H7=nl~W7q#e<%Hoq' );
define( 'NONCE_KEY',        '<Yd`pBp|c$8,wA[P ZK|E%9_32Ltq$~~(`|:y37bIx_:tww78,H4WRLK+]+l}Qt_' );
define( 'AUTH_SALT',        '~WZHyMnLwJs/<)JIa:tq[g-W#,{`ED7o.Q }PUM{I?$-(lP,<Cxhz>F5`Vf(5d j' );
define( 'SECURE_AUTH_SALT', 'hJ9P0:,5zDK`c;~D9F/M;.8TD~>bYiC8` %z(9kt;m1TBa/sGq=G7~[KO=?ofQm@' );
define( 'LOGGED_IN_SALT',   'yeb3EbfQKH6g8TvQ`}rzx!y1`>kHS<c%mQu#xKf7!mbPs+BN?fN=>)KlR721[ot%' );
define( 'NONCE_SALT',       '<-Xnxi6L v9o{@ZoLn2ey)uV|}9hnDs}<Q9UCt>4L(4MmGS?UN?49 0@VC`elM[[' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
