<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Oikeudet');
define('_MD_A_MYMENU_MYPREFERENCES','Asetukset');
// index.php
define('_AM_TH_DATETIME', 'Aika');
define('_AM_TH_USER', 'Käyttäjä');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENTTI', 'AGENT');
define('_AM_TH_TYPE', 'Tyyppi');
define('_AM_TH_DESCRIPTION', 'Kuvaus');
define('_AM_TH_BADIPS','Huono IP-osoite<br><br><span style="font-weight:normal;">Kirjoita jokainen IP rivi<br>tyhjä tarkoittaa, että kaikki IP-osoitteet ovat sallittuja</span>');
define('_AM_TH_GROUP1IPS','Sallitut IP-osoitteet ryhmälle=1<br><br><span style="font-weight:normal;">Kirjoita jokainen IP rivi.<br>192.168. tarkoittaa 192.168.*<br>tyhjä tarkoittaa, että kaikki IP:t ovat sallittuja</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompakti loki');
define('_AM_BUTTON_COMPACTLOG', 'Tiivistä!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Kopioidut (IP,Tyyppi) tietueet poistetaan');
define('_AM_LABEL_REMOVEALL', 'Poista kaikki tietueet');
define('_AM_BUTTON_REMOVEALL', 'Poista kaikki!');
define('_AM_JS_REMOVEALLCONFIRM', 'Kaikki lokit poistetaan ehdottomasti. Oletko todella kunnossa?');
define('_AM_LABEL_REMOVE', 'Poista tarkastetut tietueet:');
define('_AM_BUTTON_REMOVE', 'Poista!');
define('_AM_JS_REMOVECONFIRM', 'Poista OK?');
define('_AM_MSG_IPFILESUPDATED', 'IP-osoitteiden tiedostot on päivitetty');
define('_AM_MSG_BADIPSCANTOPEN', 'Viallisen IP -tiedostoa ei voida avata');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Ryhmä=1 sallivaa tiedostoa ei voi avata');
define('_AM_MSG_REMOVED', 'Tietueet on poistettu');
define('_AM_MSG_DELFAILED', 'Tietueiden poistaminen epäonnistui');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Muuta asetushakemisto kirjoitettavaksi: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Etuliitehallinta');
define('_AM_MSG_DBUPDATED', 'Tietokanta päivitetty onnistuneesti!');
define('_AM_CONFIRM_DELETE', 'Kaikki tiedot jätetään pois. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Jos haluat muuttaa etuliitettä,<br> muokkaa %s/data/secure.php manuaalisesti.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Ei suojattu');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Jos näet kuvan -NG- tai linkki palauttaa normaalin sivun, XOOPS_TRUST_PATH-polkua ei ole sijoitettu oikein. Paras paikka XOOPS_TRUST_PATH:lle on DocumentRootin ulkopuolella. Jos et voi tehdä sitä, sinun on asetettava .htaccess (DENY FROM ALL) alle XOOPS_TRUST_PATH toiseksi parhaana tapana.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Tarkista, että PHP-tiedostot TRUST_PATH:n sisällä on asetettu vain luku -tilaan (virheen on oltava 404, 403 tai 500)');
define('_AM_ADV_REGISTERGLOBALS',"Jos 'ON', tämä asetus kutsuu erilaisia ​​injektiohyökkäyksiä. Jos voit, aseta 'register_globals off' php.inissä, tai jos se ei ole mahdollista, luo tai muokkaa .htaccess-tiedostoa XOOPS-hakemistossasi:");
define('_AM_ADV_ALLOWURLFOPEN',"Jos ON, tämä asetus sallii hyökkääjien suorittaa mielivaltaisia komentosarjoja etäpalvelimissa.<br>Vain järjestelmänvalvoja voi muuttaa tätä asetusta.<br>Jos olet järjestelmänvalvoja, muokkaa php.ini- tai httpd.conf-tiedostoa.<br><b>Esimerkki httpd.conf:sta:<br> php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Muuten lunasta se järjestelmänvalvojillesi.");
define('_AM_ADV_USETRANSSID',"Jos 'ON', istuntotunnuksesi näytetään ankkuritageissa jne.<br>Estä istunnon kaappaus lisäämällä rivi .htaccess-tiedostoon XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Tämä asetus kutsuu \"SQL-injektiot\".<br>Muista ottaa \"Pakota desinfiointi *\" PÄÄLLE tämän moduulin asetuksista.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Siirry etuliitehallintaan');
define('_AM_ADV_MAINUNPATCHED', 'Sinun tulee muokata mainfile.php:täsi kuten kirjoitettu README:ssä.');
define('_AM_ADV_DBFACTORYPATCHED', 'Tietokantatehdas on valmis DBLayer Trappingin anti-SQL-injektioon');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Tietokantatehdas ei ole valmis DBLayer Trappingin anti-SQL-injektioon. Jotkut laastarit vaaditaan.');
define('_AM_ADV_SUBTITLECHECK', 'Tarkista, toimiiko Protector hyvin');
define('_AM_ADV_CHECKCONTAMI', 'Saastuminen');
define('_AM_ADV_CHECKISOCOM', 'Eristetyt kommentit');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'ja kirjoita siihen alla oleva rivi:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Etuliite');
define('_AM_PROTECTOR_TABLES', 'Taulukot');
define('_AM_PROTECTOR_UPDATED', 'Päivitetty');
define('_AM_PROTECTOR_COPY', 'Kopioi');
define('_AM_PROTECTOR_ACTIONS', 'Toiminnot');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Estä tarkistettujen tietueiden IP-osoitteet:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Estä!');
define('_AM_JS_BANCONFIRM', 'IP Kiellot OK?');
define('_AM_MSG_BANNEDIP', 'IP:t on estetty');
define('_AM_ADMINSTATS_TITLE', 'Protector-lokin yhteenveto');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Viime kuukausi');
define('_AM_ADMINSTATS_LAST_WEEK', 'Viime viikko');
define('_AM_ADMINSTATS_LAST_DAY', 'Viime päivä');
define('_AM_ADMINSTATS_LAST_HOUR', 'Viime tunti');
