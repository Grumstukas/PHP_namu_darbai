<?php

//php standart requrements  - https://www.php-fig.org/psr/psr-4/  Aprašo kaip elgtis kad nereiktu delioti include.
// //tėvas
// include __DIR__.'/NaminisGyvunelis.php';
// //vaikai
// include __DIR__.'/Kate.php';
// include __DIR__.'/Suo.php';
// include __DIR__.'/Ziurkenas.php';


//tai PHP funkcija, argumentas - lamda funkcija, ji suranda ir sukelia klases, kurių mums reikia - automatiškai.
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = '';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src-class/';

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
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

$murkius = new Kate;
$murkius->setBalsas('miau miau');
$murkius->balsas($murkius->getBalsas());
$murkius->setMaistas('zuvyte');
$murkius->valgo($murkius->getMaistas());
$murkius->valgo('morka');
$murkius->arSotus();

echo '<br>';

$briusius = new Suo;
$briusius->setBalsas('au au');
$briusius->balsas($briusius->getBalsas());

$briusius->valgo('obuolys');
$briusius->arSotus();

$briusius->setMaistas('kaulas');
$briusius->valgo($briusius->getMaistas());
$briusius->arSotus();

echo '<br>';

$degu = new Ziurkenas;
$degu->setBalsas('krepst krepst');
$degu->balsas($degu->getBalsas());
$degu->setMaistas('morka');
$degu->valgo($degu->getMaistas());
$degu->valgo('zuvis');
$degu->arSotus();