<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/Conectar.php";
    require_once "controllers/Vehiculos.php";

    // $control = new VehiculosController();
    // $control -> nuevo();

    if(isset($_GET['c']))
    {
        $controlador = cargarControlador($_GET['c']);
        cargarAccion($controlador,$_GET['a']);
    }
    else
    {
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion(CONTROLADOR_PRINCIPAL, ACCION_PRINCIPAL);
    }