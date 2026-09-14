<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'Kaksivaiheinen tunnistautuminen');
define('_US_2FAM_PASSWORD', 'Nykyinen salasanasi');
define('_US_2FAM_ENABLE', 'Määritä todentajasovellus');
define('_US_2FAM_CONFIRM', 'Vahvista todentajasovellus');
define('_US_2FAM_CHOOSE', 'Valitse, miten haluat vastaanottaa toisen vaiheen: todentajasovelluksella vai koodilla sähköpostitse.');
define('_US_2FAM_ENABLE_EMAIL', 'Käytä sähköpostikoodeja');
define('_US_2FAM_EMAIL_HELP', 'Sähköpostikoodit: kuusinumeroinen koodi lähetetään osoitteeseen %s joka kirjautumiskerralla. Vähemmän turvallinen kuin todentajasovellus, koska kuka tahansa sähköpostiasi lukeva voi läpäistä tämän vaiheen.');
define('_US_2FAM_EMAIL_STEP', 'Lähetimme kuusinumeroisen koodin osoitteeseen %s. Anna se alla vahvistaaksesi. Se on voimassa kymmenen minuuttia.');
define('_US_2FAM_CONFIRM_EMAIL', 'Vahvista sähköpostikoodit');
define('_US_2FAM_CODE_HELP_EMAIL', 'Kuusinumeroinen koodi juuri lähettämästämme sähköpostista.');
define('_US_2FAM_ENABLED_EMAIL', 'Sähköpostikoodit on otettu käyttöön. Tehdäksesi muutoksen, anna nykyinen salasanasi ja sähköpostitse lähetetty koodi tai palautuskoodi. Pyydä koodi alla olevalla painikkeella.');
define('_US_2FAM_SEND', 'Lähetä minulle koodi');
define('_US_2FAM_MANUAL', 'Manuaalinen määritysavain');
define('_US_2FAM_SCAN', 'QR-koodi todentajasovellusta varten');
define('_US_2FAM_STEP_APP', 'Tarvitset todentajasovelluksen: mikä tahansa sovellus tai salasananhallinta, joka luo aikapohjaisia kertakäyttökoodeja (TOTP), toimii puhelimessa tai tietokoneessa. Jos sinulla ei vielä ole sellaista, asenna ensin valitsemasi (esim. Google Authenticator, Microsoft Authenticator, Aegis tai FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Lisää tili sovelluksessa: skannaa tämä QR-koodi tai valitse manuaalinen syöttö ja kirjoita alla näkyvä määritysavain.');
define('_US_2FAM_STEP_CODE', 'Sovellus näyttää nyt kuusinumeroisen koodin, joka vaihtuu 30 sekunnin välein. Kirjoita juuri näkyvä koodi alla olevaan kenttään ja vahvista.');
define('_US_2FAM_CODE_HELP', 'Kuusinumeroinen koodi, jonka todentajasovelluksesi näyttää juuri nyt.');
define('_US_2FAM_HTTP', 'Tämä yhteys käyttää tavallista HTTP:tä. Salasanasi, istuntosi, määritysavaimesi ja palautuskoodisi voidaan siepata. Käytä HTTPS:ää aina kun mahdollista.');
define('_US_2FAM_CODES', 'Tallenna nämä palautuskoodit nyt');
define('_US_2FAM_CODES_HELP', 'Jokainen koodi toimii kerran. Näitä koodeja ei näytetä uudelleen. Säilytä ne turvallisessa paikassa, erillään tästä tilistä.');
define('_US_2FAM_DISABLE', 'Poista kaksivaiheinen tunnistautuminen käytöstä');
define('_US_2FAM_REGENERATE', 'Korvaa palautuskoodit');
define('_US_2FAM_ENABLED', 'Todentajasovellus on käytössä. Tehdäksesi muutoksen, anna nykyinen salasanasi sekä todennus- tai palautuskoodi.');
define('_US_2FAM_DISABLED', 'Kaksivaiheinen tunnistautuminen on poissa käytöstä.');
define('_US_2FAM_PAUSED', 'Sivusto on keskeyttänyt kaksivaiheiset tarkistukset. Tekijäsi säilyy, ja "muista minut" ei ole edelleenkään käytettävissä käyttöön otetuille tileille.');
define('_US_2FAM_UNAVAILABLE', 'Kaksivaiheisen tunnistautumisen määritys tai hallinta ei ole käytettävissä. Ota yhteyttä sivuston ylläpitäjään.');
define('_US_2FAM_STARTAGAIN', 'Määritys on vanhentunut tai tili on muuttunut. Anna salasanasi aloittaaksesi määrityksen uudelleen.');
define('_US_2FAM_BADPASSWORD', 'Nykyistä salasanaasi ei hyväksytty.');
define('_US_2FAM_RESET', 'Nollaa tämän käyttäjän kaksivaiheinen tunnistautuminen');
define('_US_2FAM_STATUS_NONE', 'Ei käytössä');
define('_US_2FAM_STATUS_TOTP', 'Todentajasovellus käytössä');
define('_US_2FAM_STATUS_EMAIL', 'Sähköpostikoodit käytössä');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Tila ei käytettävissä');
define('_US_2FAM_RESET_HELP', 'Tämä poistaa käyttäjän toisen tekijän käytöstä riippumatta käytetystä menetelmästä ja mitätöi hänen palautuskoodinsa sekä "muista minut" -evästeet. Olemassa olevat kirjautuneet istunnot pysyvät aktiivisina. Vahvista antamalla oma ylläpitäjän salasanasi.');
define('_US_2FAM_RESET_DONE', 'Käyttäjän kaksivaiheinen tunnistautuminen on nollattu.');
define('_US_2FAM_BACK', 'Takaisin tiliin');
define('_US_2FAM_DONE', 'Kaksivaiheinen tunnistautuminen on käytössä.');
define('_US_2FAM_REPLACED', 'Aiemmat palautuskoodit on mitätöity.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: kaksivaiheinen tunnistautuminen muutettu');
define('_US_2FAM_NOTICE_BODY', 'Tilisi kaksivaiheista tunnistautumista tai palautuskoodeja palvelussa %s muutettiin osoitteesta %s. Jos tämä et ollut sinä, ota yhteyttä sivuston ylläpitäjään.');
define('_US_2FAM_RESET_SUBJECT', '%s: ylläpitäjä nollasi kaksivaiheisen tunnistautumisesi');
define('_US_2FAM_RESET_BODY', 'Ylläpitäjä poisti toisen tekijäsi käytöstä ja mitätöi sen palautuskoodit palvelussa %s osoitteesta %s. Olemassa olevat kirjautuneet istunnot pysyvät aktiivisina. Kirjaudu sisään ja määritä kaksivaiheinen tunnistautuminen uudelleen. Ota yhteyttä sivuston ylläpitäjään, jos tämä oli odottamatonta.');
