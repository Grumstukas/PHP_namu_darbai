<?php

namespace Paroda;

use Paroda\GyvuneliuKrautuve\NaminisGyvunelis;

class Ziurkenas extends NaminisGyvunelis
{
    public function __construct($gyvunelis = 'neaiskus')
    {
        parent::__construct('Žiurkenas');  //kreipimasis į tėvą.
        echo '<br><b> Žiurkėno construktorius: '.$gyvunelis.' </b><br>';
    }
    public function svoris()
    {
        return '<p>0.15kg</p>';
    }
}
