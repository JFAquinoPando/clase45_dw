<?php
    require 'vendor/autoload.php'; 
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    $archivo = "alumnos.xlsx";

    $conexion = new mysqli("localhost", "root", "", "test2");
    $sql = "SELECT nombre, apellido FROM `agenda`";
    $documento = IOFactory::load($archivo);
    $hojaActual = $documento->getSheet(0);
    $respuesta = $conexion->query($sql);
    $filaExcel = 1;
    while ($fila = $respuesta->fetch_assoc()) {
        $hojaActual->setCellValue('A'.$filaExcel, $fila["nombre"]);
        $hojaActual->setCellValue('B'.$filaExcel, $fila["apellido"]);
        $filaExcel++;
    }
    $writer = new Xlsx($documento);
    $writer->save($archivo);