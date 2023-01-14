<?php
    require 'vendor/autoload.php';
    $pdf = new TCPDF('L','mm','A3');
    $pdf->AddPage();

    $nombre = $_GET["nombre"];
    //$pdf->Write(1,"Hola a todos!");

    $conexion = new mysqli("localhost", "root", "", "test2");
    $sql = "SELECT nombre, apellido FROM `agenda`";
    $respuesta = $conexion->query($sql);
    $html = "";
    while ($fila = $respuesta->fetch_assoc()) {
        $html .= "{$fila["nombre"]} | {$fila["apellido"]} <br>";
    }

    // Print text using writeHTMLCell() 
    $pdf->writeHTMLCell(0, 0, '', '', $nombre.$html, 0, 1, 0, true, '', true);
    $pdf->Output('example_001.pdf', 'I');