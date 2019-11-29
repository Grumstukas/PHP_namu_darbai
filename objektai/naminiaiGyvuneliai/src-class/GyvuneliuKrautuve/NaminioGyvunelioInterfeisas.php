<?php

//interfeisiu galioja tos pačios loadinimo taisyklės

namespace Paroda\GyvuneliuKrautuve;

interface NaminioGyvunelioInterfeisas
{
    //gali turėti tik metodus ir konstantas
    const AKIU_SKAICIUS = 2;

    public function balsas($balsas);

    public function valgo($maistas);

    public function svoris();
}
