<?php
namespace TRANSPORT;

class Motorcycle extends Transport{
//5. Sukurti Getters ir Setters savybių gavimui ir priskyrimui;
//7. Sukurti automobilio, motociklo ir dviračio klases;
//8. Kiekvienoje klasėje sukurti tik šio tipo transporto priemonei tinkamą savybę, jos get ir set metodus;
    private $unicMotorcycle;
    private $unicTwoMotorcycle;

    public function setUnicMotorcycle($unicMotorcycle){ //SETTERIS
        $this->unicMotorcycle=$unicMotorcycle;
    }

    public function setunicTwoMotorcycle($unicTwoMotorcycle){ //SETTERIS
        $this->unicTwoMotorcycle=$unicTwoMotorcycle;
    }

//PRIDEDAME PRIE TRANSPORT TURIMŲ SAVYBIŲ SAVYBĘ, BŪDINGĄ TIK MOTOCIKLŲ KLASEI
    public function getAllInfo()   //GETTERIS
    {
        $allData = parent::getAllInfo();
        array_push($allData, $this->unicMotorcycle);
        array_push($allData, $this->unicTwoMotorcycle);
        return $allData;

    }
}