<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$Dispositivo = $_POST['Dispositivo'];
$Origen = $_POST['Origen'];
$Destino = $_POST['Destino'];
$NombreUsuario = $_POST['NombreUsuario'];
$CodigoValidacion = $_POST['CodigoValidacion'];

$Request = 'https://maps.googleapis.com/maps/api/directions/json?origin='.urlencode($Origen).'&destination='.urlencode($Destino).'&mode=driving&key=AIzaSyCWCyRyu_2r8FjZXbwyAeeBEY15RpZU1t4';
$Json = file_get_contents($Request);
$Data = json_decode($Json, TRUE);

$NumeroSteps = count($Data["routes"][0]["legs"][0]["steps"])-1; 

for ($i=0;$i<=$NumeroSteps;$i++){
    echo 'Step ' . $i;
    echo '<br>';
    echo 'Distancia: ' . $Data["routes"][0]["legs"][0]["steps"][$i]["distance"]["value"] . "<br>";
    if($i===$NumeroSteps){
        echo 'Último step latitud: ' . $Data["routes"][0]["legs"][0]["steps"][$i]["end_location"]["lat"] . "<br>";
        echo 'Último step longitud: ' . $Data["routes"][0]["legs"][0]["steps"][$i]["end_location"]["lng"] . "<br>";
    }else{
        echo 'Siguiente step latitud: ' . $Data["routes"][0]["legs"][0]["steps"][$i+1]["end_location"]["lat"] . "<br>";
        echo 'Siguiente step longitud: ' . $Data["routes"][0]["legs"][0]["steps"][$i+1]["end_location"]["lng"] . "<br>";
    }
}

?>