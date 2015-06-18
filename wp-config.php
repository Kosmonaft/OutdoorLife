<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'k2-sklep_2');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'k2-sklep_2');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'Mash10zl');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'k2-sklep.nazwa.pl:3307');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6,hbB}`AgQUh@x/U;69]A<@AGB P5+6UgZeI}Np;1s7::g&Sf_wu47mT6G2t-Me{');
define('SECURE_AUTH_KEY',  'e/@Kt@PCG 3H(z/+1Z8SYiP>**p3$)`e#`J)mV<f@+@ocU1&,q]8@hT.w@dt4AME');
define('LOGGED_IN_KEY',    'K6~tFCX)#)ltw2LJ+O,i+BmJBnb3NA[Tsuf0/?U:e[>YX3rX|>Z=KEb`-)uo_jeR');
define('NONCE_KEY',        ' EY *o*LWHLJpTxd(?-c,f:-i}n<i[t|54c^vh[!g~{?<jv@OXyhDgOTMn(ew9@M');
define('AUTH_SALT',        '+Vq3Ir%CLczzNJmUJ+ow7KJxm[Vn{NK9u-Xr7Z<I2>FUg7-F^?J,w([C5.Z,oPz[');
define('SECURE_AUTH_SALT', '+!cBed-w{xodP+j=UFf0+2xCjNB=+OzKpLMGO+WP2DyMwPZNy<Dakd}l~f=^8P@b');
define('LOGGED_IN_SALT',   ',wX,9pj4yx|9AKQm6bBot),|TmfOujfq8A<a>j~D,Y}WuGE*NeG2eMh,W5^K-O|r');
define('NONCE_SALT',       'E&@5$s:Bd_&;@%4Jt8gI.0&R./-K/|:1Mf)/JbU5R;7f[_Bv*T9Lcz-zt;_o3RJ.');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
