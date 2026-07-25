<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: fi

define('_MD_DEBUGBAR_DEBUG', 'Virheenkorjaus');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Sisällytetyt tiedostot');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP-versio');
define('_MD_DEBUGBAR_NONE', 'Ei mitään');
define('_MD_DEBUGBAR_ERRORS', 'Virheet');
define('_MD_DEBUGBAR_DEPRECATED', 'Vanhentunut');
define('_MD_DEBUGBAR_QUERIES', 'Kyselyt');
define('_MD_DEBUGBAR_BLOCKS', 'Lohkot');
define('_MD_DEBUGBAR_EXTRA', 'Lisää');
define('_MD_DEBUGBAR_TIMERS', 'Ajastimet');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s latautui %s sekunnissa.');
define('_MD_DEBUGBAR_TOTAL', 'Yhteensä');
define('_MD_DEBUGBAR_NOT_CACHED', 'Ei välimuistissa');
define('_MD_DEBUGBAR_CACHED', 'Välimuistissa (päivittyy %s sekunnin välein)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(tyhjä merkkijono)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool TOSI');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool EPÄTOSI');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Tietokantakyselyt');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Muistin käyttö');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d kyselyitä');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d kaksoiskappaletta)');
define('_MD_DEBUGBAR_BYTES', '%s tavua');
define('_MD_DEBUGBAR_DB_VERSION', '%s-versio');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Virhenumero: %s Virheilmoitus: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Virhe #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Poikkeus');
define('_MD_DEBUGBAR_RAY_QUERY', 'Kysely #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'HITAS');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Estä (välimuistissa %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Estä (ei välimuistissa)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Vedos');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Mallipohjakonteksti');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(ei mallipohjien muuttujia)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Hakemistoa "modules/debugbar/%s" ei luotu');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Hakemiston "%s" luominen epäonnistui aineiston kopioinnin aikana');
