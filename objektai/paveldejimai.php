<?php

class NaminisGyvunelis
{
    protected $balsas;
    protected $maistas;
    protected $sotumas;


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


    public function balsas($balsas){
        echo '<p> Gyvunelis sako '.$balsas.'</p>';
    }

    public function valgo($maistas){
        if($maistas != $this->maistas){
            echo '<p> Gyvūnelis '.$maistas.' neėda</p>';
            $this->sotumas--;
        }else{
            echo '<p> Gyvūnelis valgo '.$maistas.'</p>';
            $this->sotumas+=2;
        }
        

    }

    public function arSotus(){
        if( $this->sotumas > 0){
            echo '<p> Gyvūnelis sotus</p>';
        }else{
           echo '<p> Gyvūnelis alkanas</p>'; 
        }
        
    }

}

class Kate extends NaminisGyvunelis
{

}

class Suo extends NaminisGyvunelis
{

}

class Ziurkenas extends NaminisGyvunelis
{

}

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