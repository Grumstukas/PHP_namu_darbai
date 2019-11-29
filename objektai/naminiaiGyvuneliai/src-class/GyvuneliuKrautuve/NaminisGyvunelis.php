<?php

namespace Paroda\GyvuneliuKrautuve;

// folderio kuriame padėta tėvinė klasė pavadinimas, + identifikatorius kad dvi tos pačios bet iš skirtingų folderių klasės galėtų dirbti kartu
//  Paroda\ tokio folderio jau nebėra, todėl tai yra prefiksas. žiūrėti index.php

use Paroda\GyvuneliuKrautuve\NaminioGyvunelioInterfeisas;
use Paroda\GyvuneliuKrautuve\NaminisGyvunelis;

abstract class NaminisGyvunelis implements NaminioGyvunelioInterfeisas
{
    protected $balsas;
    protected $maistas;
    protected $sotumas;

    public static $seimininkas;

    public function __construct($gyvunelis = 'neaiskus')
    {
        echo '<br><b> Tėvo konstruktorius: '.$gyvunelis.' </b><br>';
    }

    public function setBalsas($balsas)
    {
        $this->balsas = $balsas;
    }

    public function getBalsas()
    {
        return $this->balsas;
    }

    public function setMaistas($maistas)
    {
        $this->maistas = $maistas;
    }

    public function getMaistas()
    {
        return $this->maistas;
    }

    public function balsas($balsas)
    {
        echo '<p> Gyvunelis sako '.$balsas.'</p>';
    }

    public function valgo($maistas)
    {
        if ($maistas != $this->maistas) {
            echo '<p> Gyvūnelis '.$maistas.' neėda</p>';
            --$this->sotumas;
        } else {
            echo '<p> Gyvūnelis valgo '.$maistas.'</p>';
            $this->sotumas += 2;
        }
    }

    public function arSotus()
    {
        if ($this->sotumas > 0) {
            echo '<p> Gyvūnelis sotus</p>';
        } else {
            echo '<p> Gyvūnelis alkanas</p>';
        }
    }

    /*Kad gauti statinę savybę: */
    public function seimininkas()
    {
        echo '<p> Šio gyvūnėlio šeimininkas yra <b>'.self::$seimininkas.'</b></p>';
    }

    /*Kad pakeisti statinę savybę: */
    public function kitasSeimininkas($vardas)
    {
        self::$seimininkas = $vardas;
    }

    public static function kitas_statinis_seimininkas($vardas)
    {
        self::$seimininkas = $vardas;
    }
//nes developeris nežino kaip pasverti gyvūnelį....JEIGU YRA ABSTRAKTUS METODAS TAI IR KLASĖ ABSTRAKTI
    abstract public function svoris();
}
