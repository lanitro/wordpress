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
define('DB_NAME', 'wordpress92');

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
define('AUTH_KEY',         '3wCXJY{ivLUOesvu8e[x$6K0c?rsMLrZ}i4uFfr9mWjourYe_spu[AXotRL $@<T');
define('SECURE_AUTH_KEY',  '6u _ O;|7qlq6G1g2O[*z5aN9_[IxYt6~E63Mu4FARcI}Uh+NwS1[@+dZ=5C&9nQ');
define('LOGGED_IN_KEY',    ']h}#eF/oq@N~(6yX^W_>Whiq63q@ech>IQ0U@$|1:zUn2;ConU]y08I~UjayE]PS');
define('NONCE_KEY',        '<q~`1 6-yqjI}<<T/kh$qgo75:/Ssuw7Iz X2mr+mXhuyvDLkosVWGv+Kh|]P+Uu');
define('AUTH_SALT',        '$ueuTL WL%hdDiX|r]+1=P)lI5p@,,]/N/N>}W),s9bX)#WNyj-5*^.^.f~Y@f |');
define('SECURE_AUTH_SALT', 'N@%jd9d=0PucOU;,kzR/}2B3NUZtzS%xz^s;bOzr @+s2^LR2sD#.SM?lR9~9iX?');
define('LOGGED_IN_SALT',   '4Q?,~f%S)bK3T;u%Vb^L+[/rFUwqg0OP)ITJ5+?]:kx-e:ndVyiV7Ej|+-hc+.}k');
define('NONCE_SALT',       '}CSv8FDWR`?k)W#J>?#u##uaG)0Fz;o+o>$v&F~SREpCJHuYe&}@Q%M4;d-FzvdK');
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