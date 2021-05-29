<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'myBlog' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'doctor2' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'doctor2' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BpP<5f#)sdh{je:H6:3@z{Oa5*sTISGtl&+KLlhe91W~v<mJ7z?LHZ 0v9F|2;.[' );
define( 'SECURE_AUTH_KEY',  't|QcYV2tO(wx3SZW)pK{gHXy!lFId@qGT=32Z!t2!j30l+X?jy,H=hYo4s;tACm?' );
define( 'LOGGED_IN_KEY',    '4_!pn<i`r6J^Fh8I*&{iq@:<CC2CLwqx/^U:X,59d!$N,F1JO(G./#?Ts,LY{Kvx' );
define( 'NONCE_KEY',        '=%b.cZYFYW7qNXr|81LnKmO~.m]3H4hHH7S;t5H};)V?L(95YHcj8]B:9r.>)Ly)' );
define( 'AUTH_SALT',        '-tL5e<y((J9zz4%W4*QBGS)0u(A#r;`q1bm/^q:6P,|E3NX+,h#/YcIZ|?ixKjTz' );
define( 'SECURE_AUTH_SALT', '+`1Ln&14ck[$05Z+q~i&_5$cct2tt5xf8I9H(;[yk*=?rEYyD?7R5mpJjeeBsOWP' );
define( 'LOGGED_IN_SALT',   'yP-k|?1`JB5NT, G,7`(Z{+PK`(xEil.%jRcby*/@!2,kHNn]Kc4Tr/@E>Z!U1Eu' );
define( 'NONCE_SALT',       '|h<C&]fSU)&]9Lje=bdyhk@,6l4D1-gIrM.BnJSrSRF0*KH#+7]~1q`:IGD{Mw).' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');