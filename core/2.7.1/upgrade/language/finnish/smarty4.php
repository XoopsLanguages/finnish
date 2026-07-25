<?php

// _LANGCODE: fi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Migration');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Skannerin tulokset');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Suorita tarkistus');
define('_XOOPS_SMARTY4_SCANNER_END', 'Poistu skannerista');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Sääntö');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Ottelu');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Tiedosto');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Korjaa määrä');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Manuaalinen tarkistus vaaditaan');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Voidaan korjata automaattisesti: Foreach nimikemuuttuja nimetään uudelleen lisäämällä "_item" (esim. "foo" muuttuu "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Ei kirjoitettava');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Uudelleenskannausasetukset');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Napsauta alla olevaa "Kyllä"-valintaruutua ja napsauta sitten Suorita tarkistus -painiketta yrittääksesi korjata löydetyt ongelmat automaattisesti.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Merkitse valmiiksi');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Mallihakemisto (valinnainen)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Mallin laajennus (valinnainen)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 tuo merkittävän muutoksen: Smarty 4</h3>

<p>Valitettavasti tämä muutos saattaa häiritä joitain vanhempia teemoja. Ennen kuin jatkat päivitystä, varmista, että noudatat näitä vaiheita:

<li>Suorita preflight.php tarkistaaksesi vanhentuneet teemat tai moduulimallit.</li>
<li>Jos havaitset ongelmia, lue tämä asiakirja ymmärtääksesi tarvittavat muutokset, ennen kuin jatkat päivitystä.</li>
<li>Kun olet tehnyt tarvittavat muutokset, suorita preflight.php uudelleen.</li>
<li>Jos ongelmia ei enää ole, voit aloittaa päivitysprosessin.</li>
</p>
EOT,
);
