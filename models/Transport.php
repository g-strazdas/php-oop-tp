<?php
namespace TRANSPORT;
//5. Sukurti	Getters	ir	Setters	savybių	gavimui	ir	priskyrimui;
class Transport{
    private $brand;
    private $model;
    private $price;
    private $weight;
    private $engine;
    private $power;
    private $speed;
    private $description;
    private $passengers;
//BŪTINOSIOS SAVYBĖS NURODOMOS KONSTRUKTORIUJE
    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    } //METODO PAVADINIMAS CHANGE - NES SU KONSTRUKTORIUMI NUSTATOME DVI SEKANČIAS OBJEKTO YPATYBES
    public function changeModel($model){    //SETTER
        $this->model = $model;
    }
    public function changeBrand($brand){    //SETTER
        $this->brand = $brand;
    }
    public function setPrice($price){       //SETTER
        $this->price = $price;
    }
    public function setWeight($weight){     //SETTER
        $this->weight = $weight;
    }
    public function setEngine($engine){     //SETTER
        $this->engine = $engine;
    }
    public function setPower($power){    //SETTER
        $this->power = $power;
    }
    public function setSpeed($speed){       //SETTER
        $this->speed = $speed;
    }
    public function setDescription($description){   //SETTER
        $this->description = $description;
    }
    public function setPassengers($passengers){     //SETTER
        $this->passengers = $passengers;
    }
    public function getBasicInfo(){  //GETTERIS BAZINIŲ SAVYBIŲ IŠVEDIMUI Į MASYVĄ
        return[
            $this->brand,
            $this->model
        ];
    }
    public function getAllInfo(){    //GETTERIS VISŲ SAVYBIŲ IŠVEDIMUI Į MASYVĄ
        return [
            $this->brand,
            $this->model,
            $this->price,
            $this->weight,
            $this->engine,
            $this->power,
            $this->speed,
            $this->description,
            $this->passengers
        ];
    }
}