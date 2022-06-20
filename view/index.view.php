<?php
use TRANSPORT\Transport;
use TRANSPORT\Car;
use TRANSPORT\Motorcycle;
use TRANSPORT\Bicycle;
use TRANSPORT\Render;
?>
<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP praktinė užduotis Nr.1</title>
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid p-0 bg-dark vh-100">
<?php
echo '<br><p style="color:#e8bfbf;"> 4. Inicijuoti objektą. Atspausdinti automobilio modelį ir markę:  ';
$car = new Transport('Volkswagen','Passat B6');
foreach ($car->getBasicInfo() as $key=>$value){echo "$value ";}

echo "</h5><hr>";
//6. Panaudoti pastaruosius metodus ir priskirti trūkstamą informaciją
$car = new Car('Volkswagen','Passat B6');
$car->changeBrand("Honda"); $car->changeModel("Civic"); $car->setPrice('6000€');
$car->setWeight('1250 kg'); $car->setEngine('Yra'); $car->setPower('104 kW');
$car->setSpeed('230 km/h'); $car->setDescription('Ispanija'); $car->setPassengers('4');
//9. Sukurti objektus iš automobilio, motociklo ir dviračio klasių;
$motorcycle = new Motorcycle('Yamaha','XVS1300');
$motorcycle->setPrice('2000€');
$motorcycle->setWeight('350 kg'); $motorcycle->setEngine('Yra'); $motorcycle->setPower('66 kW');
$motorcycle->setSpeed('250 km/h'); $motorcycle->setDescription('JAV'); $motorcycle->setPassengers('2');
$bicycle = new Bicycle('Starland','TS-100');
$bicycle->setPrice('150€');
$bicycle->setWeight('350 kg'); $bicycle->setEngine('Nėra'); $bicycle->setPower('Nėra');
$bicycle->setSpeed('50 km/h'); $bicycle->setDescription('Lenkija'); $bicycle->setPassengers('1');
//10. Priskirti tik šioms TP tinkamas savybes naudojant set metodą; Atspausdinti naudojant get metodą;
$car->setTransmission('Automatinė gr.dėžė'); $car->setCar('Automobilis');
$bicycle->setVehicleType('Dviratis'); $bicycle->setUnicChar('Versace stipinai');
$motorcycle->setUnicMotorcycle('Čioperis'); $motorcycle->setunicTwoMotorcycle('Motociklas');

$car = (array)$car; $motorcycle = (array)$motorcycle; $bicycle = (array)$bicycle;
echo "<h2 style='text-align: center; color:#e8bfbf;'>TRANSPORTO PRIEMONĖS</h2><br>";
echo '<table class="table table-hover table-bordered table-sm table-striped w-75"';
echo 'style="margin-left: auto; margin-right: auto; border: solid 2px; background-color: #EDEDED; font-size: 14px;">
<thead class="table-primary text-center align-middle" style="border: solid 2px #000000">
<tr><th>Tipas</th><th>Markė</th><th>Modelis</th><th>Kaina</th><th>Svoris</th><th>Variklis</th><th>Galia</th><th>Maks. greitis</th>
<th>Kilmės šalis</th><th>Keleivių sk.</th><th>Specifinė sav.</th></tr></thead>
<tbody  class="table-group-divider text-center table-light"  style="border: solid 1px; font-size: small; vertical-align: middle">';
Render::showInfo($car); Render::showInfo($motorcycle);  Render::showInfo($bicycle);
echo '</tbody></table>';
?>
</body>
</html>