<?php

namespace Company_tree\Tevas;

use Company_tree\Tevas\Senelis\Company;

class SoftwareCompany extends Company
{
    protected $programingLanguages;

    public function __construct()
    {
        parent::__construct();  //kreipimasis į tėvą.
        $this->setProgramingLanguages();
    }

    public function setProgramingLanguages()
    {   
        $allLanguages = ['PHP', 'Pascal', 'Go', 'C++', 'JAVA', 'Phyton'];
        $myLang = [];
        $usedLangs = [];
        foreach(range(0,2) as $lang){
            do {
                $langNumber = rand(0,(count($allLanguages)-1));
            } while (in_array($langNumber, $usedLangs));
            $usedLangs[] = $langNumber;
            $myLang[] = $allLanguages[$langNumber];
        }
        $this->programingLanguages = $myLang;
    }

    public function getProgramingLanguages()
    {
        return $this->programingLanguages;
    }

}

