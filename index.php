<?php
    require_once "config/config.php";
    require_once "config/Conectar.php";
    require_once "controllers/Vehiculos.php";

    // $control = new VehiculosController();
    // $control -> nuevo();

    if(isset($_GET['c']))
    {
        $controlador = $_GET['c'];
    }
    else
    {

    }