<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_esame' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(h~xTrHC7D.o;l(i3+)W]<w8dziX`=n%.HgxI64IfYnf/_SU!jtBTAenBgo4eB4&' );
define( 'SECURE_AUTH_KEY',  'C P`b|2z)rwR6Vkb/4&s.)F4EM_~w]L2N<gF6b!)37}7miReu!w?XuTYwu7 T|>_' );
define( 'LOGGED_IN_KEY',    'D`PY[r/-ZmT_l [P<(Me$pY,+>~!|Q,EqX(dOamhGhKyEZvhKW,,@(o mP1%@Vuf' );
define( 'NONCE_KEY',        'X$]zv>wUUxbP&7zMLLC6S|8z]rLj0oY5>KI|(l|@;1*o**9:ahZ/W2ysNxVaAo7Q' );
define( 'AUTH_SALT',        'PS>Fi(s8Ebgsho=qNKktz$)IvYoRo3`K3X;E)m<Mm-Ke2>BM_]58KxrK[l,Iwi~C' );
define( 'SECURE_AUTH_SALT', 'z#x.N1auyUSb$(l#nylyTFq`4-C[-3G*K+)JoV1 eR!6xA)j!YoO)M-N]!J.(@5c' );
define( 'LOGGED_IN_SALT',   'K(j5oL2fZLn}_L1hj%I=4TWgR}rQon/Pgnx6JEav@&{jkt$ RAROhR#,O]9g#1.@' );
define( 'NONCE_SALT',       'kXu^:{MR}9veYKf KRM]:cP=rm7!Rn.rGjqV}>Nf;cuErU76e(ByHY2f{JP^Jwh>' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
