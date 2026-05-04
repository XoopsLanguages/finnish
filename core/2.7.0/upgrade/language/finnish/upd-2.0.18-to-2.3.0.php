<?php
// _LANGCODE: fi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS fyysiset polut');
define('LEGEND_DATABASE', 'Tietokannan merkistö');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS kirjastohakemisto');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS tiedostohakemisto');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Tietokannan merkistö ja lajittelu');
define('DB_COLLATION_HELP', "4.12 alkaen MySQL tukee mukautettua merkistöä ja lajittelua. Se on kuitenkin odotettua monimutkaisempi, joten ÄLÄ tee muutoksia, ellet ole varma valinnastasi.");
define('DB_COLLATION_NOCHANGE', 'Älä muuta');

define('XOOPS_PATH_FOUND', 'Polku löytyi.');
define('ERR_COULD_NOT_ACCESS', 'Määritettyä kansiota ei voitu käyttää. Varmista, että se on olemassa ja että palvelin voi lukea sen.');
define('CHECKING_PERMISSIONS', 'Tarkistetaan tiedostojen ja hakemistojen käyttöoikeuksia...');
define('ERR_NEED_WRITE_ACCESS', 'Palvelimelle on annettava kirjoitusoikeus seuraaviin tiedostoihin ja kansioon<br>(eli <em>chmod 777 directory_name</em> UNIX/LINUX-palvelimella)');
define('IS_NOT_WRITABLE', '%s EI ole kirjoituskelpoinen.');
define('IS_WRITABLE', '%s on kirjoitettava.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Virhe kirjoitettaessa sisältöä tiedostoon mainfile.php, kirjoita sisältö mainfile.php-tiedostoon manuaalisesti.');
