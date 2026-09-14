<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Modern Theme Language Definitions
 */
// _LANGCODE: fi

// Compatibility with default/oxygen theme
if (!defined('_OXYGEN_SYSOPTIONS')) {
    define('_OXYGEN_SYSOPTIONS', 'Järjestelmäasetukset');
}

// -- Dashboard: KPI Cards --
define('_MODERN_TOTAL_USERS', 'Käyttäjiä yhteensä');
define('_MODERN_NEW_THIS_MONTH', 'Uusia tässä kuussa');
define('_MODERN_ACTIVE_MODULES', 'Aktiiviset moduulit');
define('_MODERN_ACTIVE_MODULES_USERS', 'Käyttäjien moduulit');
define('_MODERN_ACTIVE_MODULES_ADMINS', 'Ylläpidon moduulit');
define('_MODERN_ACTIVE_USERS', 'Aktiiviset käyttäjät');
define('_MODERN_LAST_30_DAYS', 'Viimeiset 30 päivää');
define('_MODERN_SERVER_LOAD', 'Palvelimen kuormitus');
define('_MODERN_CURRENT', 'Nykyinen');

// -- Dashboard: Charts --
define('_MODERN_USER_REGISTRATIONS', 'Käyttäjärekisteröinnit');
define('_MODERN_NEW_USERS_6_MONTHS', 'Uudet käyttäjät viimeisen 6 kuukauden aikana');
define('_MODERN_USER_GROUPS', 'Käyttäjäryhmät');
define('_MODERN_DISTRIBUTION_BY_GROUP', 'Jakautuminen ryhmittäin');
define('_MODERN_CONTENT_DISTRIBUTION', 'Sisällön jakautuminen');
define('_MODERN_CONTENT_ACROSS_MODULES', 'Sisältö moduuleittain');
define('_MODERN_NEW_USERS', 'Uudet käyttäjät');

// -- Dashboard: System Information --
define('_MODERN_SYSTEM_INFORMATION', 'Järjestelmätiedot');
define('_MODERN_COMPOSER_PACKAGES', 'Composer-paketit');
define('_MODERN_COMPONENT', 'Komponentti');
define('_MODERN_VALUE', 'Arvo');
define('_MODERN_STATUS', 'Tila');
define('_MODERN_PACKAGE', 'Paketti');
define('_MODERN_VERSION', 'Versio');
define('_MODERN_SERVER_API', 'Palvelin-API');
define('_MODERN_OPERATING_SYSTEM', 'Käyttöjärjestelmä');
define('_MODERN_MEMORY_LIMIT', 'Muistiraja');
define('_MODERN_UPLOAD_MAX_SIZE', 'Suurin sallittu latauskoko');
define('_MODERN_MAX_EXECUTION_TIME', 'Enimmäissuoritusaika');
define('_MODERN_POST_MAX_SIZE', 'Suurin sallittu POST-koko');
define('_MODERN_FILE_UPLOADS', 'Tiedostojen lataus');

// -- Dashboard: Status Badges --
define('_MODERN_STATUS_ACTIVE', 'Aktiivinen');
define('_MODERN_STATUS_RUNNING', 'Käynnissä');
define('_MODERN_STATUS_GOOD', 'Hyvä');
define('_MODERN_STATUS_CONFIGURED', 'Määritetty');
define('_MODERN_STATUS_ADEQUATE', 'Riittävä');
define('_MODERN_STATUS_ENABLED', 'Käytössä');

// -- Sidebar --
define('_MODERN_CONTROL_PANEL', 'Ohjauspaneeli');
define('_MODERN_MODULES', 'Moduulit');
define('_MODERN_SYSTEM', 'Järjestelmä');

// -- Header --
define('_MODERN_TOGGLE_MENU', 'Vaihda valikko');
define('_MODERN_ONLINE', 'Verkossa');
define('_MODERN_TOGGLE_DARK_MODE', 'Vaihda tumma tila');

// -- Customizer --
define('_MODERN_THEME_SETTINGS', 'Teema-asetukset');
define('_MODERN_COLOR_SCHEME', 'Värikaava');
define('_MODERN_COLOR_DEFAULT_BLUE', 'Oletussininen');
define('_MODERN_COLOR_DEFAULT', 'Oletus');
define('_MODERN_COLOR_NATURE_GREEN', 'Luonnonvihreä');
define('_MODERN_COLOR_GREEN', 'Vihreä');
define('_MODERN_COLOR_ROYAL_PURPLE', 'Kuninkaallinen violetti');
define('_MODERN_COLOR_PURPLE', 'Violetti');
define('_MODERN_COLOR_WARM_ORANGE', 'Lämmin oranssi');
define('_MODERN_COLOR_ORANGE', 'Oranssi');
define('_MODERN_COLOR_OCEAN_TEAL', 'Merivihreä');
define('_MODERN_COLOR_TEAL', 'Sinivihreä');
define('_MODERN_COLOR_BOLD_RED', 'Rohkea punainen');
define('_MODERN_COLOR_RED', 'Punainen');
define('_MODERN_DASHBOARD_SECTIONS', 'Kojetaulun osiot');
define('_MODERN_KPI_CARDS', 'KPI-kortit');
define('_MODERN_CHARTS', 'Kaaviot');
define('_MODERN_MODULE_WIDGETS', 'Moduuliwidgetit');
define('_MODERN_CONTENT_TRACKING', 'Sisällön seuranta');
define('_MODERN_CONTENT_TRACKING_HINT', 'Valitse moduulit näytettäväksi sisällön jakautumisessa.');
define('_MODERN_SIDEBAR', 'Sivupaneeli');
define('_MODERN_COMPACT_MODE', 'Kompakti tila');
define('_MODERN_SHOW_ICONS', 'Näytä kuvakkeet');
define('_MODERN_DISPLAY', 'Näyttö');
define('_MODERN_ANIMATIONS', 'Animaatiot');
define('_MODERN_COMPACT_VIEW', 'Kompakti näkymä');
define('_MODERN_RESET_TO_DEFAULTS', 'Palauta oletukset');
define('_MODERN_CLOSE_SETTINGS', 'Sulje asetukset');
define('_MODERN_CUSTOMIZE_THEME', 'Mukauta teemaa');
define('_MODERN_CONFIRM_RESET', 'Palautetaanko kaikki mukautukset oletusasetuksiin?');

// -- Footer --
define('_MODERN_POWERED_BY', 'Toimii XOOPS-alustalla');
define('_MODERN_THEME_VERSION', 'Moderni Admin Theme v1.0');

// -- Page --
define('_MODERN_OPEN', 'Avaa');

// -- Widgets --
define('_MODERN_VIEW_ALL', 'Näytä kaikki');

// -- Content Module Labels (for Content Distribution chart) --
define('_MODERN_MOD_ARTICLES', 'Artikkelit');
define('_MODERN_MOD_NEWS', 'Uutiset');
define('_MODERN_MOD_DOWNLOADS', 'Lataukset');
define('_MODERN_MOD_JOBS', 'Työpaikat');
define('_MODERN_MOD_BLOG_POSTS', 'Blogikirjoitukset');
define('_MODERN_MOD_ALUMNI', 'Alumnet');
define('_MODERN_MOD_PEDIGREES', 'Sukupuut');
define('_MODERN_MOD_PROPERTIES', 'Kiinteistöt');
define('_MODERN_MOD_FORUM_POSTS', 'Foorumiviestit');
define('_MODERN_MOD_LINKS', 'Linkit');

// -- Charts: Dataset Labels --
define('_MODERN_ITEMS', 'Kohteet');
