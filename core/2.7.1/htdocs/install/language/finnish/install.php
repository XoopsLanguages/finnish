<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: fi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Näytä/piilota ohjeteksti');
// License
//define('LICENSE_NOT_WRITEABLE', 'Lisenssitiedostoon "%s" EI voi kirjoittaa!');
//define('LICENSE_IS_WRITEABLE', '%s Lisenssi on kirjoitettava.');
// Configuration check page
define('SERVER_API', 'Palvelin API');
define('PHP_EXTENSION', '%s -laajennus');
define('CHAR_ENCODING', 'Merkistökoodaus');
define('XML_PARSING', 'XML-jäsennys');
define('REQUIREMENTS', 'Vaatimukset');
define('_PHP_VERSION', 'PHP-versio');
define('RECOMMENDED_SETTINGS', 'Suositellut asetukset');
define('RECOMMENDED_EXTENSIONS', 'Suositellut laajennukset');
define('SETTING_NAME', 'Asetuksen nimi');
define('RECOMMENDED', 'Suositellaan');
define('CURRENT', 'Nykyinen');
define('RECOMMENDED_EXTENSIONS_MSG', 'Näitä laajennuksia ei tarvita normaalissa käytössä, mutta ne voivat olla tarpeen
 joidenkin erityisominaisuuksien (kuten monikielisen tai RSS-tuen) tutkimiseksi. Siksi on suositeltavaa asentaa ne.');
define('NONE', 'Ei mitään');
define('SUCCESS', 'Menestys');
define('WARNING', 'Varoitus');
define('FAILED', 'Epäonnistui');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS asennustoiminto');
define('LANGUAGE_SELECTION', 'Kielen valinta');
define('LANGUAGE_SELECTION_TITLE', 'Valitse kielesi');        // L128
define('INTRODUCTION', 'Johdanto');
define('INTRODUCTION_TITLE', 'Tervetuloa XOOPS-asennusoppaaseen');        // L0
define('CONFIGURATION_CHECK', 'Konfiguraation tarkistus');
define('CONFIGURATION_CHECK_TITLE', 'Palvelinkokoonpanon tarkistaminen');
define('PATHS_SETTINGS', 'Polkuasetukset');
define('PATHS_SETTINGS_TITLE', 'Polkuasetukset');
define('DATABASE_CONNECTION', 'Tietokantayhteys');
define('DATABASE_CONNECTION_TITLE', 'Tietokantayhteys');
define('DATABASE_CONFIG', 'Tietokantaconfig');
define('DATABASE_CONFIG_TITLE', 'Tietokantaconfig');
define('CONFIG_SAVE', 'Tallenna konfiguraatio');
define('CONFIG_SAVE_TITLE', 'Tallennetaan järjestelmäkokoonpanoa');
define('TABLES_CREATION', 'Taulujen luonti');
define('TABLES_CREATION_TITLE', 'Tietokantataulujen luominen');
define('INITIAL_SETTINGS', 'Alkuperäiset asetukset');
define('INITIAL_SETTINGS_TITLE', 'Anna alkuasetukset');
define('DATA_INSERTION', 'Tietojen lisäys');
define('DATA_INSERTION_TITLE', 'Asetusten tallentaminen tietokantaan');
define('WELCOME', 'Tervetuloa');
define('WELCOME_TITLE', 'Tervetuloa XOOPS -sivustollesi');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS fyysiset polut');
define('XOOPS_URLS', 'Verkko-osoitteet');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS dokumenttien fyysinen pääpolku');
define('XOOPS_ROOT_PATH_HELP', 'Fyysinen polku asiakirjahakemistoon XOOPS (palveltu) ILMAN perässä olevaa kauttaviivaa');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS kirjastohakemisto');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS datatiedostohakemisto');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Verkkosivuston sijainti (URL)'); // L56
define('XOOPS_URL_HELP', 'Pääosoite URL, jota käytetään XOOPS-asennuksen käyttämiseen'); // L58
define('LEGEND_CONNECTION', 'Palvelinyhteys');
define('LEGEND_DATABASE', 'Tietokanta'); // L51
define('DB_HOST_LABEL', 'Palvelimen isäntänimi');    // L27
define('DB_HOST_HELP', 'Tietokantapalvelimen isäntänimi. Jos olet epävarma, <em>localhost</em> toimii useimmissa tapauksissa'); // L67
define('DB_USER_LABEL', 'Käyttäjänimi');    // L28
define('DB_USER_HELP', 'Sen käyttäjätilin nimi, jota käytetään yhteyden muodostamiseen tietokantapalvelimeen'); // L65
define('DB_PASS_LABEL', 'Salasana');    // L52
define('DB_PASS_HELP', 'Tietokannan käyttäjätilisi salasana'); // L68
define('DB_NAME_LABEL', 'Tietokannan nimi');    // L29
define('DB_NAME_HELP', 'Isännässä olevan tietokannan nimi. Asennusohjelma yrittää luoda tietokannan, jos sitä ei ole olemassa'); // L64
define('DB_CHARSET_LABEL', 'Tietokannan merkistö');
define('DB_CHARSET_HELP', 'MySQL sisältää merkistötuen, jonka avulla voit tallentaa tietoja käyttämällä erilaisia merkistöjä ja suorittaa vertailuja erilaisten lajittelujen mukaan.');
define('DB_COLLATION_LABEL', 'Tietokannan lajittelu');
define('DB_COLLATION_HELP', 'Lajittelu on joukko sääntöjä merkistöjen merkkien vertailua varten.');
define('DB_PREFIX_LABEL', 'Taulukon etuliite');    // L30
define('DB_PREFIX_HELP', 'Tämä etuliite lisätään kaikkiin uusiin luotuihin taulukoihin nimiristiriitojen välttämiseksi tietokannassa. Jos olet epävarma, säilytä oletusarvo'); // L63
define('DB_PCONNECT_LABEL', 'Käytä pysyvää yhteyttä');    // L54
define('DB_PCONNECT_HELP', "Oletusarvo on \"Ei\". Jätä se tyhjäksi, jos olet epävarma"); // L69
define('DB_DATABASE_LABEL', 'Tietokanta');
define('LEGEND_ADMIN_ACCOUNT', 'Ylläpitäjätili');
define('ADMIN_LOGIN_LABEL', 'Ylläpitäjän kirjautuminen'); // L37
define('ADMIN_EMAIL_LABEL', 'Ylläpitäjän sähköposti'); // L38
define('ADMIN_PASS_LABEL', 'Ylläpitäjän salasana'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Vahvista salasana'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Edellinen'); // L42
define('BUTTON_NEXT', 'Jatka'); // L47
// Messages
define('XOOPS_FOUND', '%s löytyi');
define('CHECKING_PERMISSIONS', 'Tarkistetaan tiedostojen ja hakemistojen käyttöoikeuksia...'); // L82
define('IS_NOT_WRITABLE', '%s EI ole kirjoituskelpoinen.'); // L83
define('IS_WRITABLE', '%s on kirjoitettava.'); // L84
define('XOOPS_PATH_FOUND', 'Polku löytyi.');
//define('READY_CREATE_TABLES', 'XOOPS-taulukkoa ei havaittu.<br>Asennusohjelma on nyt valmis luomaan XOOPS-järjestelmätaulukot.');
define('XOOPS_TABLES_FOUND', 'Järjestelmätaulukot XOOPS ovat jo olemassa tietokannassasi.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS järjestelmätaulukot on luotu.');
//define('READY_INSERT_DATA', 'Asennusohjelma on nyt valmis lisäämään alkutiedot tietokantaasi.');
//define('READY_SAVE_MAINFILE', 'Asennusohjelma on nyt valmis tallentamaan määritetyt asetukset tiedostoon <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Asetukset tallennettu');
define('SAVED_MAINFILE_MSG', 'Asennusohjelma on tallentanut määritetyt asetukset tiedostoihin <em>mainfile.php</em> ja <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS tietoa löytyi tietokannasta.');
define('DATA_INSERTED', 'Alkuperäiset tiedot on lisätty tietokantaan.');
// %s is database name
define('DATABASE_CREATED', 'Tietokanta %s luotu!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Taulukkoa %s ei voi luoda'); // L118
define('TABLE_CREATED', 'Taulukko %s luotu.'); // L45
define('ROWS_INSERTED', '%d merkintää lisätty taulukkoon %s.'); // L119
define('ROWS_FAILED', '%d merkinnän lisääminen taulukkoon %s epäonnistui.'); // L120
define('TABLE_ALTERED', 'Taulukko %s päivitetty.'); // L133
define('TABLE_NOT_ALTERED', 'Taulukon %s päivitys epäonnistui.'); // L134
define('TABLE_DROPPED', 'Taulukko %s pudonnut.'); // L163
define('TABLE_NOT_DROPPED', 'Taulukon %s poistaminen epäonnistui.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Määritettyä kansiota ei voitu käyttää. Varmista, että se on olemassa ja että palvelin voi lukea sen.');
define('ERR_NO_XOOPS_FOUND', 'Määritetystä kansiosta ei löytynyt XOOPS asennusta.');
define('ERR_INVALID_EMAIL', 'Virheellinen sähköposti'); // L73
define('ERR_REQUIRED', 'Tieto on pakollinen.'); // L41
define('ERR_PASSWORD_MATCH', 'Kaksi salasanaa eivät täsmää');
define('ERR_NEED_WRITE_ACCESS', 'Palvelimelle on annettava kirjoitusoikeus seuraaviin tiedostoihin ja kansioihin<br>(eli <em>chmod 775 directory_name</em> UNIX/LINUX-palvelimella)<br>Jos niitä ei ole saatavilla tai niitä ei ole luotu oikein, luo manuaalisesti ja määritä oikeat käyttöoikeudet.');
define('ERR_NO_DATABASE', 'Tietokantaa ei voitu luoda. Ota yhteyttä palvelimen ylläpitäjään saadaksesi lisätietoja.'); // L31
define('ERR_NO_DBCONNECTION', 'Yhteyden muodostaminen tietokantapalvelimeen epäonnistui.'); // L106
define('ERR_WRITING_CONSTANT', 'Vakion %s kirjoitus epäonnistui.'); // L122
define('ERR_COPY_MAINFILE', 'Jakelutiedostoa ei voitu kopioida kohteeseen %s');
define('ERR_WRITE_MAINFILE', 'Ei voitu kirjoittaa kohteeseen %s. Tarkista tiedoston käyttöoikeus ja yritä uudelleen.');
define('ERR_READ_MAINFILE', 'Ei voitu avata %s lukemista varten');
define('ERR_INVALID_DBCHARSET', "Merkistöä '%s' ei tueta.");
define('ERR_INVALID_DBCOLLATION', "Lajittelua '%s' ei tueta.");
define('ERR_CHARSET_NOT_SET', 'Oletusmerkkijoukkoa ei ole asetettu XOOPS tietokannalle.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Tuki');
define('LOGIN', 'Todennus');
define('LOGIN_TITLE', 'Todennus');
define('USER_LOGIN', 'Ylläpitäjän kirjautuminen');
define('USERNAME', 'Käyttäjätunnus :');
define('PASSWORD', 'Salasana :');
define('ICONV_CONVERSION', 'Merkistömuunnos');
define('ZLIB_COMPRESSION', 'Zlib-pakkaus');
define('IMAGE_FUNCTIONS', 'Kuvatoiminnot');
define('IMAGE_METAS', 'Kuvan metatiedot (exif)');
define('FILTER_FUNCTIONS', 'Suodatintoiminnot');
define('ADMIN_EXIST', 'Järjestelmänvalvojan tili on jo olemassa.');
define('CONFIG_SITE', 'Sivuston konfiguraatio');
define('CONFIG_SITE_TITLE', 'Sivuston konfiguraatio');
define('MODULES', 'Moduulien asennus');
define('MODULES_TITLE', 'Moduulien asennus');
define('THEME', 'Valitse teema');
define('THEME_TITLE', 'Valitse oletusteema');
define('INSTALLED_MODULES', 'Seuraavat moduulit on asennettu.');
define('NO_MODULES_FOUND', 'Moduuleita ei löydetty.');
define('NO_INSTALLED_MODULES', 'Yhtään moduulia ei ole asennettu.');
define('THEME_NO_SCREENSHOT', 'Kuvakaappausta ei löydetty');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Salasanan vahvuus');
define('PASSWORD_DESC', 'Salasanaa ei syötetty');
define('PASSWORD_GENERATOR', 'Salasanageneraattori');
define('PASSWORD_GENERATE', 'Luo');
define('PASSWORD_COPY', 'Kopioi');
define('PASSWORD_VERY_WEAK', 'Erittäin heikko');
define('PASSWORD_WEAK', 'Heikko');
define('PASSWORD_BETTER', 'Parempi');
define('PASSWORD_MEDIUM', 'Keskitaso');
define('PASSWORD_STRONG', 'Vahva');
define('PASSWORD_STRONGEST', 'Vahvin');
//2.5.7
define('WRITTEN_LICENSE', 'Kirjoitti XOOPS %s Lisenssiavain: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Yritä uudelleen');
define('CHMOD_CHGRP_IGNORE', 'Käytä siitä huolimatta');
define('CHMOD_CHGRP_ERROR', 'Asennusohjelma ei ehkä pysty kirjoittamaan asetustiedostoa %1$s.<p>PHP kirjoittaa tiedostoja käyttäjän %2$s ja ryhmän %3$s alla.<p>Hakemistossa %4$s/ on käyttäjä %5$s ja ryhmä %6$s');
//2.5.9
define("CURL_HTTP", "Asiakkaan URL Kirjasto (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Verkkosivuston evästeverkkotunnus');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Verkkotunnus evästeiden asettamiseen. Saattaa olla tyhjä, koko isäntä osoitteesta URL (www.example.com) tai rekisteröity verkkotunnus ilman aliverkkotunnuksia (example.com) jaettavaksi aliverkkotunnusten kesken (www.example.com ja blog.example.com.)');
define('INTL_SUPPORT', 'Kansainvälistämistoiminnot');
define('XOOPS_SOURCE_CODE', "XOOPS GitHub");
define('XOOPS_INSTALLING', 'Asennetaan');
define('XOOPS_ERROR_ENCOUNTERED', 'Virhe');
define('XOOPS_ERROR_SEE_BELOW', 'Katso viestit alta.');
define('MODULES_AVAILABLE', 'Saatavilla olevat moduulit');
define('INSTALL_THIS_MODULE', 'Lisää %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Asetustiedostoa %s ei voitu kopioida');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Sivusto');
define('_WEBSITE_SLOGAN', 'Käytä vain sitä!');
define('_WEBSITE_META_KEYWORDS', 'xoops, verkkosovelluskehys, cms, sisällönhallintajärjestelmä');
define('_WEBSITE_FOOTER', "Palvelun tarjoaa XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>XOOPS Project</a>");
define('_WEBSITE_COPYRIGHT', 'Tekijänoikeus © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS on dynaaminen oliopohjainen avoimen lähdekoodin portaalin komentosarja, joka on kirjoitettu kielellä PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'HUPS');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
