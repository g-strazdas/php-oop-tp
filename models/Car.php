<?php
namespace TRANSPORT;

class Car extends Transport{
//5. Sukurti Getters ir Setters savybių gavimui ir priskyrimui;
//7. Sukurti automobilio, motociklo ir dviračio klases;
//8. Kiekvienoje klasėje sukurti tik šio tipo transporto priemonei tinkamą savybę, jos get ir set metodus;
    private $transmission;
    private $car;
    //SETTERIS
    public function setTransmission($transmission){
        $this->transmission=$transmission;
    }
    //SETTERIS
    public function setCar($car){
        $this->car=$car;
    }

//PRIDEDAME PRIE TRANSPORT TURIMŲ SAVYBIŲ SAVYBĘ, BŪDINGĄ TIK CAR KLASEI
    public function getAllInfo()    //GETTERIS
    {
        $allData = parent::getAllInfo();
        array_push($allData, $this->transmission);
        array_push($allData, $this->car);
        return $allData;
    }
}