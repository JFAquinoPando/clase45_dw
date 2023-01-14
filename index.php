<?php
$lista = ["hola", 123, true, "test"];

$lista2 = [
    1, 8, 89,45,741
];


function obtenerMayor($matriz = []){
    //var_dump($x);
    $mayor = null;
    for ($i=0; $i < sizeof($matriz); $i++) { 
        if ($matriz[$i] > $mayor && $mayor != null || $mayor == null) {
            $mayor = $matriz[$i];
            //echo "|$mayor|";
        }
    }
    if ($mayor == null) {
        return "No hay valor mayor";
    }
    return $mayor;
}

echo obtenerMayor($lista2);
echo "<br>".max($lista2);
//echo implode("|", $lista);

/*
function unirArray(string $separador = ", ",array $array ){
    $txt = "";
    for ($i=0; $i < sizeof($array); $i++) { 
        $txt .= $array[$i].$separador;
    }
    $txt= substr($txt,0,-1);
    return $txt;
}*/



//echo unirArray("*", $lista);