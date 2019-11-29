<?php

namespace Company_tree\Tevas\Senelis;

use Company_tree\Tevas\Senelis\Company;

class Company {
    protected $CompanyName;
    protected $employees;
    protected $turnover;


    public function __construct()
    {
        $this->setCompanyName();
        $this->setEmployeese();
        $this->setTurnover();
    }

    public function setCompanyName() //name - atsitiktinis stringas iš a-z raidžių, atsitiktinio ilgio nuo 5 iki 12, pirma raidė didžioji
    {
        $allLeters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $company_name = substr($allLeters,rand(26,(strlen($allLeters)-1)), 1);

        foreach(range(4,11) as $letter){
            $letter = substr($allLeters,rand(1,25), 1);
            $company_name .= $letter;
        }

        $this->CompanyName = $company_name;
    }

    public function setEmployeese()
    {
        $this->employees = rand(3,100);
    }
    public function setTurnover()
    {
        $this->turnover = rand(10000,10000000).' $';
    }

    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    public function getEmployeese()
    {
        return $this->employees;
    }
    public function getTurnover()
    {
        return $this->turnover;
    }
}