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
define('DB_NAME', 'wordpress-portfolio');

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
define('AUTH_KEY',         'YpezmP7!5I~i!5{>T1.{5yMf2;QUmT:Fj BrFj[q/WZ6MVtyn0a^gEwhR*z?,I+@');
define('SECURE_AUTH_KEY',  'S%yKMqTQLV+^Q]8F8%q&i0py|6rw}*be3q7[zLlc}|W~5aJyProCeHJv774!*xSY');
define('LOGGED_IN_KEY',    '!}*-dqyU1!GomAcfkh3$z)0WI?,Uic>(mFaJ+b50[IULxa;<24xndo}?^Pdb/{L+');
define('NONCE_KEY',        'aySNQNco7gV|&QVK[g&/9`n]Br#e7_JQaq,8M_$Xa%0e#mm?Vs]YylmdD}h12H_M');
define('AUTH_SALT',        'Y3F%OW+@5!xqfbSi,nQ9i2d~-DlD4q6S&YOtH#u@Mo1s~o/h[iXBZ:cb0*M!shJ+');
define('SECURE_AUTH_SALT', 'hzC~:VOtmJm>!017O0O5CaIDm]wk@t~F}KJPIXv_O}~hJVGAcr&ZiklqROk* Hw4');
define('LOGGED_IN_SALT',   't$Fntkk~&TS`<I7obI)!TRSM`SH>D|=/75k(fP<W<j|VI3|[INVKo!e44O*J~y66');
define('NONCE_SALT',       '(Mnh}dONaBa2Cc41NV Pje4a 8Eu]T_&-1?P6f8>k21M0A_s$uE1?ek5`/VFe+Ih');
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