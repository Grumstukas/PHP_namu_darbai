<?php

namespace Company_tree;

use Company_tree\Tevas\SoftwareCompany;

class Programmer extends SoftwareCompany {
    protected $programmerName;
    protected $skills;
    protected $bankrupt;


    public function __construct()
    {
        parent::__construct();  //kreipimasis į tėvą.
        $this->setName();
        $this->setSkills();
    }

    public function setName()
    {
        $allLeters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $programmer_name = substr($allLeters,rand(26,(strlen($allLeters)-1)), 1);

        foreach(range(4,11) as $letter){
            $letter = substr($allLeters,rand(1,25), 1);
            $programmer_name .= $letter;
        }

        $this->programmerName = $programmer_name;
    }

    public function setSkills()
    {
        $avalable_skills = $this->getProgramingLanguages();
        $usedSkills = [];
        foreach(range(0, 1) as $skill){
            do {
                $skillNumber = rand(0, (count($avalable_skills)-1));
            } while (in_array($skillNumber, $usedSkills));
            $usedSkills[] = $skillNumber;
            $mySkills[] = $avalable_skills[$skillNumber];
        }
        $this->skills = $mySkills;
    }

    public function getName()
    {
        return $this->programmerName;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function getBankrupt()
    {
        return $this->bankrupt;
    }

    public function printInfo()
    {
        if($this->getBankrupt() == 1){
            echo '<br><br><b>Sorry, This company <i><u> '.$this->getCompanyName().' </u></i> went bankrupt, <i><u> '.$this->getEmployeese().' </u></i> the employee was dismissed</b><br><br>';
        } else if($this->getBankrupt() == 2){
            echo '<br><br><b>Sorry, This company <i> '.$this->getCompanyName().' </i> went bankrupt</b><br><br>';
        } else {
        echo '<br><br>*************SoftwareCompany*************<br>';
        echo 'Kompanijos vardas <b>'.$this->getCompanyName().'</b><br>';
        echo 'Kompanijos žmonių skaičius <b>'.$this->getEmployeese().'</b><br>';
        echo 'Kompanijos pelnas <b>'.$this->getTurnover().'</b>';
        echo '<br>Kompanijoje naudojamos programavimo kalbos: <b>'.implode(' ', $this->getProgramingLanguages()).'</b>';
        echo '<br>Programuotojo vardas <b>'.$this->getName().'</b><br>';
        echo 'Programuotojo įgūdžiai: <b>'.implode(' ', $this->getSkills()).'</b>';
        }
    }

    public function addSkill($skill)
    {
        if($this->getBankrupt() < 1){
            $mySkills = $this->getSkills();
            $mySkills[] = $skill;
            $this->skills = $mySkills;
        }
        
    }

    public function bankrupt(){
        $this->builderName = '';
        $this->skills = [];
        $this->buildingObjects = [];
        $this->turnover = '';
        $this->bankrupt = 1;
        $this->printInfo();
        $this->bankrupt = 2;
        $this->employees = '';
    }


    //     skills - 2 iš 3-jų  programingLanguages (ne iš aibės) atsitiktinai parinkti dydžiai
}