<?php
//
// _LANGCODE: fi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> on avoimen lähdekoodin lähde
    Olio-Web-julkaisujärjestelmä kirjoitettu PHP. Se on ihanteellinen työkalu
    kehittää pienistä suuriin dynaamisia yhteisösivustoja, yrityksen sisäisiä portaaleja, yritysportaaleja, verkkoblogeja ja paljon muuta.
</p>
<p>
    XOOPS julkaistaan ​​ehtojen mukaisesti
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Yleinen julkinen lisenssi (GPL)</a>
    versio 2 tai uudempi, ja sitä voi käyttää ja muokata ilmaiseksi.
    Sen jakaminen on ilmaista, kunhan noudatat GPL:n jakeluehtoja.
</p>
<h3>Vaatimukset</h3>
<ul>
    <li>WWW Palvelin (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS jne)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 tai korkeampi, 8.4+ suositellaan</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 tai korkeampi, 8.4.5+ suositellaan </li>
</ul>
<h3>Ennen sinua install</h3>
<ol>
    <li>Asenna WWW-palvelin, PHP ja tietokantapalvelin oikein.</li>
    <li>Valmistele tietokanta XOOPS-sivustollesi.</li>
    <li>Valmistele käyttäjätili ja anna käyttäjälle pääsy tietokantaan.</li>
    <li>Tee näistä hakemistoista ja tiedostoista kirjoitettavaa: %s</li>
    <li>Turvallisuussyistä sinun on erittäin suositeltavaa siirtää alla olevat kaksi hakemistoa pois <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">asiakirjan juuri</a> ja muuta kansioiden nimet: %s</li>
    <li>Luo (jos niitä ei ole jo olemassa) ja tee nämä hakemistot kirjoitettaviksi: %s</li>
    <li>Ota eväste ja selaimesi JavaScript käyttöön.</li>
</ol>
<h3>Erityishuomautuksia</h3>
<ol>
    <li>Jotkin tietyt järjestelmäohjelmistoyhdistelmät saattavat vaatia lisämäärityksiä toimiakseen
    kanssa XOOPS. Jos jokin näistä aiheista koskee ympäristöäsi, katso koko teksti
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    asennusohje</a> saadaksesi lisätietoja.<br><br>

    <li><strong>SELinux</strong> käytössä olevat järjestelmät (esim <strong>CentOS</strong>  ja <strong>RHEL</strong>) saattaa edellyttää muutoksia suojauskontekstiin
    XOOPS hakemistoille normaalien tiedostooikeuksien lisäksi tehdä hakemistoista kirjoituskelpoisia.
    Ota yhteyttä järjestelmän dokumentaatioon ja/tai järjestelmänvalvojaan.
</ol>
';

return $content;

