<?php

namespace Company_tree;

use Company_tree\Tevas\ConstructionCompany;

class Builder extends ConstructionCompany {
    protected $builderName;
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
        $builder_name = substr($allLeters,rand(26,(strlen($allLeters)-1)), 1);

        foreach(range(4,11) as $letter){
            $letter = substr($allLeters,rand(1,25), 1);
            $builder_name .= $letter;
        }

        $this->builderName = $builder_name;
    }

    public function setSkills()
    {
        $avalable_skills = ['electrician', 'plumber', 'tractor driver', 'engineer'];
        $mySkills[] = $avalable_skills[rand(0, (count($avalable_skills)-1))];
        $this->skills = $mySkills;
    }

    public function getName()
    {
        return $this->builderName;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function getBankrupt()
    {
        return $this->bankrupt;
    }

    public function printInfo(){
        if($this->getBankrupt() == 1){
            echo '<br><br><b>Sorry, This company <i><u> '.$this->getCompanyName().' </u></i> went bankrupt, <i><u> '.$this->getEmployeese().' </u></i> the employee was dismissed</b><br><br>';
        } else if($this->getBankrupt() == 2){
            echo '<br><br><b>Sorry, This company <i> '.$this->getCompanyName().' </i> went bankrupt</b><br><br>';
        } else {
        echo '<br><br>*************ConstructionCompany*************<br>';
        echo 'Kompanijos vardas <b>'.$this->getCompanyName().'</b><br>';
        echo 'Kompanijos žmonių skaičius <b>'.$this->getEmployeese().'</b><br>';
        echo 'Kompanijos pelnas <b>'.$this->getTurnover().'</b>';
        echo '<br>Kompanijos statomi pastatai: <b>'.implode(' ', $this->getBuildingObjects()).'</b>';
        echo '<br>Statybininko vardas <b>'.$this->getName().'<br></b>';
        echo 'Statybininko įgūdžiai <b>'.implode(' ', $this->getSkills()).'</b>';
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

}

