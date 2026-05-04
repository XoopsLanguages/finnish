xoopseditor tarjoaa joukon editoreja XOOPS:lle

käyttöopas:

1 Tarkista tiedostot xoops_version.php kohdasta /xoopseditor/ varmistaaksesi, että ne ovat uudempia kuin nykyiset

2 lataa /xoopseditor/ hakemistoon /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/luokka/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 määritä asetukset tarvittaessa
3.1 ./dhtmlext(kaikki editorit)/language/: tee paikallinen kielitiedosto english.php:n perusteella
3.3 ./dhtmlext(kaikki editorit)/editor_registry.php: aseta editorin asetukset: järjestys - näyttöjärjestys, jos editorin valintaa käytetään, 0 pois käytöstä; nohtml - toimii ei-html-syntaksilla
3.3 ./FCKeditor/module/: kopioi tiedostot moduulien kansioihin, jos moduulikohtaisia ​​latausoikeuksia, tallennus- ja muokkausasetuksia tarvitaan
3.3.1 ./FCKeditor/module/fckeditor.config.js: muokkausasetuksia ei yleensä tarvitse muuttaa
3.3.2 ./FCKeditor/module/fckeditor.connector.php: määrittääksesi kansion tiedostojen selailuun (ja tallennustilan lataamiseen) => XOOPS/uploads/XOOPS_FCK_FOLDER/, kansio on luotava manuaalisesti
3.3.3 ./FCKeditor/module/fckeditor.upload.php: määritä latauslupa ja tallennustila
3.4 XOOPS/uploads/fckeditor/: kansion luomiseen, jos FCKeditor on käytössä, käytetään latauksiin, joista lähetyskansiota ei ole määritetty
3.5 ./tinymce/tinymce/jscripts/: lataa paikalliset kielitiedostot osoitteesta http://tinymce.moxiecode.com/language.php

4 tarkista tiedostonimet: jos tiedostonimi on kirjainkoolla, varmista, että tiedostojen nimet ovat kirjaimellisesti oikein, eli "FCKeditor" ei ole identtinen "fckeditor" kanssa.

5 Tarkista kehitysopas /xoopseditor/sampleform.inc.php
