<?php
namespace TRANSPORT;

class Bicycle extends Transport{
//5. Sukurti Getters ir Setters savybių gavimui ir priskyrimui;
//7. Sukurti automobilio, motociklo ir dviračio klases;
//8. Kiekvienoje klasėje sukurti tik šio tipo transporto priemonei tinkamą savybę, jos get ir set metodus;
    private $unicChar;
    private $vehicle;

    public function setUnicChar($unicChar){ //SETTERIS
        $this->unicChar=$unicChar;
    }

    public function setVehicleType($vehicle){ //SETTERIS
        $this->vehicle=$vehicle;
    }

//PRIDEDAME PRIE TRANSPORT TURIMŲ SAVYBIŲ SAVYBĘ, BŪDINGĄ TIK DVIRAČIŲ KLASEI
    public function getAllInfo() //GETTERIS
    {
        $allData = parent::getAllInfo();
        array_push($allData, $this->unicChar, $this->vehicle);
        return $allData;
    }
}