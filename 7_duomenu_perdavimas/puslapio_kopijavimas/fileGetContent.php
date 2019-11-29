<?php

$htmlGet = file_get_contents('https://www.vz.lt');
$htmlGet = str_replace('platforma','aaaaaaaaaa', $htmlGet);
echo $htmlGet;