<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Toinen vaihe');
define('_US_2FA_PROMPT', 'Anna koodi todentajasovelluksestasi');
define('_US_2FA_CODE', 'Todennuskoodi');
define('_US_2FA_PROMPT_EMAIL', 'Lähetimme kuusinumeroisen koodin osoitteeseen %s. Anna se alla.');
define('_US_2FA_CODE_EMAIL', 'Sähköpostista saatu koodi');
define('_US_2FA_SEND', 'Lähetä uusi koodi');
define('_US_2FA_SENT', 'Uusi koodi on lähetetty osoitteeseen %s. Se on voimassa kymmenen minuuttia.');
define('_US_2FA_SEND_WAIT', 'Koodi lähetettiin alle minuutti sitten. Tarkista saapuneet ja roskapostikansio ennen kuin pyydät uutta.');
define('_US_2FA_SEND_FAILED', 'Koodia ei voitu lähettää juuri nyt. Yritä hetken kuluttua uudelleen tai käytä palautuskoodia.');
define('_US_2FA_EMAIL_SUBJECT', '%s: kirjautumiskoodisi');
define('_US_2FA_EMAIL_BODY', 'Kirjautumiskoodisi palveluun %s on:

%s

Se on voimassa %d minuuttia ja toimii kerran. Jos et pyytänyt tätä, jätä tämä viesti huomiotta ja harkitse salasanan vaihtamista.');
define('_US_2FA_RECOVERY', 'Käytä sen sijaan palautuskoodia');
define('_US_2FA_RECOVERY_HINT', 'Jokainen palautuskoodi toimii kerran. Sen käyttäminen lähettää sinulle sähköpostiviestin.');
define('_US_2FA_SUBMIT', 'Jatka');
define('_US_2FA_STARTAGAIN', 'Tämä kirjautuminen on vanhentunut tai keskeytynyt. Aloita alusta.');
define('_US_2FA_BACKTOLOGIN', 'Takaisin kirjautumislomakkeeseen');
define('_US_2FA_BADCODE', 'Koodia ei hyväksytty.');
define('_US_2FA_LOCKED', 'Liian monta yritystä. Toinen vaihe on lukittu viideksitoista minuutiksi; palautuskoodi toimii silti.');
define('_US_2FA_UNAVAILABLE', 'Toinen vaihe ei ole käytettävissä juuri nyt. Palautuskoodi toimii silti, tai ota yhteyttä sivuston ylläpitäjään.');
define('_US_2FA_REQUIRED', 'Tällä tilillä on kaksivaiheinen tunnistautuminen käytössä. Kirjaudu sisään sivuston kirjautumissivun kautta.');
define('_US_2FA_HTTP_LOGIN', 'Tämä ponnahdusikkuna ei voi suorittaa kaksivaiheista kirjautumista HTTP:n kautta, koska salasanasi lähetettäisiin salaamattomana. Käytä sen sijaan sivuston kirjautumista, tai pyydä ylläpitäjää ottamaan HTTPS käyttöön sivustolle.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: toinen vaihe lukittu');
define('_US_2FA_LOCKED_MAIL_BODY', 'Tilillesi palvelussa %s syötettiin viisi väärää toisen vaiheen koodia osoitteesta %s. Toinen vaihe on lukittu viideksitoista minuutiksi. Jos tämä et ollut sinä, vaihda salasanasi.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: palautuskoodia käytettiin');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Palautuskoodia käytettiin kirjautumiseen tilillesi palvelussa %s osoitteesta %s. Tuo koodi ei enää toimi. Jos tämä et ollut sinä, vaihda salasanasi ja nollaa palautuskoodisi.');
