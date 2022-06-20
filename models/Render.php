<?php
namespace TRANSPORT;
class Render {
  /*norint panaudoti statinį metodą NEREIKIA KURTI OBJEKTO. Darome masyvo atspausdinimui, kad nereiktų foreach
  veiks kaip globali f-ja, išvkviečiama pagal poreikį. */
    static public function showInfo($data){ //ATKREIPTI DĖMESĮ Į static - apibrėžiame statinį metodą
        $first = array_shift($data);
        array_push($data, $first);
        echo "<tr>";
        foreach ($data as $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}