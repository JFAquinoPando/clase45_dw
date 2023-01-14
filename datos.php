<?php
    // https://dolar.melizeche.com/api/1.0/

    ///venta

use function PHPSTORM_META\type;

    include "util.php";


    $datosJson = obtenerDatos("https://dolar.melizeche.com/api/1.0/");

    $datosArray = json_decode($datosJson, true);


    $datosJson = obtenerDatos("http://localhost/clase45_dw/json.php");

    $datosArray = json_decode($datosJson, true);

    var_dump($datosArray);

    exit("salida!");

    //var_dump($datosArray);
    $menor = null;
    $mayor = 0;
    $local = "";
    $localMayor = "";
    foreach ($datosArray["dolarpy"] as $key => $value) {
        echo "clave $key $value[venta] | $value[compra] <br>";
        if ($value['venta'] <= $menor && $value["venta"] > 0.0 || $menor == null ) {
            $menor = $value["venta"];
        }
        if ( $value['compra'] > $mayor) {
            $mayor = $value["compra"];
            echo $mayor."<br>";
        }
    }
    foreach ($datosArray["dolarpy"] as $key => $value) {
        if ($value['venta'] == $menor) {
            $local .= "$key,";
        }
        if ($value['compra'] == $mayor) {
            $localMayor .= "$key,";
        }
    }
    $local=substr($local,0,-1);
    $localMayor=substr($localMayor,0,-1);
    echo "el menor valor es de :".$menor." y lo encontraras en $local<br>";
    echo "el mayor valor es de :".$mayor." y lo encontraras en $localMayor";

