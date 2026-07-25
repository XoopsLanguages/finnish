<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: fi

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Virheiden raportointi ja suorituskykyanalyysi PHP DebugBar-ohjelmalla');

define('_MI_DEBUGBAR_ENABLE', 'Näytä DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Ota Smarty Debug käyttöön');
define('_MI_DEBUGBAR_FILESDEBUG', 'Ota sisällytettyjen tiedostojen välilehti käyttöön');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Näytä kaikki pyynnön aikana ladatut PHP-tiedostot');
define('_MI_DEBUGBAR_SLOWQUERY', 'Hitaan kyselyn kynnys (sekuntia)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Tätä hitaammat kyselyt korostetaan punaisella (esim. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Kyselyjen kirjaus');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Kaikki kyselyt tai vain hitaat kyselyt ja virheet');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Kaikki kyselyt');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Vain hitaat ja virheet');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ota Ray-integraatio käyttöön');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Lähetä debug-tiedot Ray-sovellukseen');

define('_MI_DEBUGBAR_ADMENU1', 'Koti');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Tietoja');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Takaisin hallintaan ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Yleiskatsaus');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Vastuuvapauslauseke');
\define('_MI_DEBUGBAR_LICENSE', 'Lisenssi');
\define('_MI_DEBUGBAR_SUPPORT', 'Tuki');
