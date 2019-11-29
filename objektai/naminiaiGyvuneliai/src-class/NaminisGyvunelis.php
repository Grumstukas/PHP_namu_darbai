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