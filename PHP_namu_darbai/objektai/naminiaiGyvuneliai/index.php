<?php

//php standart requrements  - https://www.php-fig.org/psr/psr-4/  Aprašo kaip elgtis kad nereiktu delioti include.
// //tėvas
// include __DIR__.'/NaminisGyvunelis.php';
// //vaikai
// include __DIR__.'/Kate.php';
// include __DIR__.'/Suo.php';
// include __DIR__.'/Ziurkenas.php';

use Paroda\Kate;
use Paroda\Suo as Dog;
use Paroda\GyvuneliuKrautuve\NaminisGyvunelis;
use Paroda\GyvuneliuKrautuve\NaminioGyvunelioInterfeisas;

//tai PHP funkcija, argumentas - lamda funkcija, ji suranda ir sukelia klases, kurių mums reikia - automatiškai.
spl_autoload_register(function ($class) {
    // project-specific namespace prefix  kad jeigu reiketu sujungti pora klasiu su vienodu vardu
    $prefix = 'Paroda';  //namespace dalis, kuri neturi fizinio folderio

    // base directory for the namespace prefix
    $base_dir = __DIR__.'/src-class/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir.str_replace('\\', '/', $relative_class).'.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});


NaminisGyvunelis::$seimininkas = 'Simona';
echo 'Statinis Šeimininkas: <b>'.NaminisGyvunelis::$seimininkas.'</b>';  //statinė saybė yra kintamasis
NaminisGyvunelis::kitas_statinis_seimininkas('Liudas');
echo '<br>Gyvunelio akiu skaicius: <b>'.NaminisGyvunelis::AKIU_SKAICIUS.'</b>';

$murkius = new Kate('Kniauklė');
$murkius->setBalsas('miau miau');
$murkius->balsas($murkius->getBalsas());
$murkius->setMaistas('zuvyte');
$murkius->valgo($murkius->getMaistas());
$murkius->valgo('morka');
$murkius->arSotus();
$murkius->seimininkas();
$murkius->kitasSeimininkas('Antanas');
$murkius->seimininkas();
echo $murkius->svoris();

echo '<br>';

$briusius = new Dog();
$briusius->setBalsas('au au');
$briusius->balsas($briusius->getBalsas());

$briusius->valgo('obuolys');
$briusius->arSotus();

$briusius->setMaistas('kaulas');
$briusius->valgo($briusius->getMaistas());
$briusius->arSotus();
$briusius->seimininkas();
echo $briusius->svoris();

echo '<br>';

$degu = new Paroda\Ziurkenas();
$degu->setBalsas('krepst krepst');
$degu->balsas($degu->getBalsas());
$degu->setMaistas('morka');
$degu->valgo($degu->getMaistas());
$degu->valgo('zuvis');
$degu->arSotus();
$degu->seimininkas();
echo $degu->svoris();

$alibaba = [];

function gyvunelioPasverimas(NaminioGyvunelioInterfeisas $gyvunelis){ 
    /*gyvūnelis turi buti sertifikuotas savo interfeisu, 
    kad nebūtų galima su funkcija kviesti nepriklausančių gyvunelio klasei nesamonių;*/
    echo '<br>'.$gyvunelis->svoris().'</br>';
}

gyvunelioPasverimas($briusius);
gyvunelioPasverimas(new Paroda\Ziurkenas());
gyvunelioPasverimas($alibaba);