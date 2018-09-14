<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ecommerce');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':R+pWQW;:>usZ}A,SbUqr,7x|1V D5_*5lB6R>$&IcNB)U#0iyW*jt3]LzIRt;Dn');
define('SECURE_AUTH_KEY',  '_&wMK%X3<ZWwEOw(t&v&nu^r-v)`3{UOm9Wd9*8UE<h#vngWwDUq[pkX+PY,D-h7');
define('LOGGED_IN_KEY',    '*)? ^]F7]<<o^`HLtK#BZWlC[5cimo,k36taaVuC]V1w0>f%QXGwWNQ Zn4{O1ft');
define('NONCE_KEY',        'xu^&ue?c2b9.u`#88Y*Ik,otK$Eq+U}eeP5{A?{6CTQr+b|Dknk+Tjw^^[#@iN+E');
define('AUTH_SALT',        'XtJ}Q8Ha#AT|vu(,g_ jxAg89SC7?Kf`]-[!!vk0p1f+-UOF5P`jGPW^9c}3Y)^%');
define('SECURE_AUTH_SALT', '#@G|V~VU(|xj*X1No`qUIfas9f$K-xWbzgy#jsq::E3x},F4YNo7a[W`l*Kt.34M');
define('LOGGED_IN_SALT',   '+K&K1E!qbtty^!I/^T`}dBU&mHDND8GOiUQ8Bf=3+LU[`Cvog+`Kl,pEI[qwf La');
define('NONCE_SALT',       '[u|$nz2lNSHR)opK!Swa#!5;CDze#XfF|bX-J-:^~@U[$aH^U0g+l^b?a]R3Y4hs');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');