<?php
namespace Company_tree\Tevas;

use Company_tree\Tevas\Senelis\Company;

class ConstructionCompany extends Company{

    protected $buildingObjects;

    public function __construct()
    {
        parent::__construct();  //kreipimasis į tėvą.
        $this->setBuildingObjects();
    }

    public function setBuildingObjects()
    {   
        $allBuildings = ['Houses', 'Bridges', 'Offices', 'Roads', 'Gardens', 'Railroads', 'Canals', 'Aqueduct', 'Stadions'];
        $myBuildings = [];
        $usedBuildings = [];
        foreach(range(0,2) as $house){
            do {
                $buildingNumber = rand(0,(count($allBuildings)-1));
            } while (in_array($buildingNumber, $usedBuildings));
            $usedBuildings[] = $buildingNumber;
            $myBuildings[] = $allBuildings[$buildingNumber];
        }
        $this->buildingObjects = $myBuildings;
    }

    public function getBuildingObjects()
    {
        return $this->buildingObjects;
    }
}