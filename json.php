<?php
    header("Content-type: application/json");

    $datos = [
        "nombre" => "jose",
        "apellido" => "aquino",
        "edad" => 27
    ];

    echo json_encode($datos);