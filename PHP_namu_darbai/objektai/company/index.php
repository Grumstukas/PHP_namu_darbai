<?php

include __DIR__.'/uploader.php';
use Company_tree\Tevas\Senelis\Company;
use Company_tree\Tevas\SoftwareCompany;
use Company_tree\Tevas\ConstructionCompany;
use Company_tree\Programmer;
use Company_tree\Builder;

// '*************SoftwareCompany*************
$programmer = new Programmer();
 
$programmer->printInfo();
$programmer->addSkill('Rusty');
$programmer->addSkill('PHP');
$programmer->addSkill('Pascal');
$programmer->addSkill('Go');
$programmer->addSkill('JAVA');
$programmer->addSkill('Phyton');
$programmer->printInfo();
$programmer->bankrupt();
$programmer->addSkill('PHP');
$programmer->printInfo();

echo '<br>';

//*************ConstructionCompany*************
$builder = new Builder;
$builder->printInfo();
$builder->addSkill('Truck Driver');
$builder->printInfo();
$builder->bankrupt();
$builder->addSkill('Tank Driver');
$builder->printInfo();

