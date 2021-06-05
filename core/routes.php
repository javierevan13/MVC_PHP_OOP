<?php
    function cargarControlador($controlador)
    {
        $controlador =strtolower($controlador);
        $nombreControlador = ucwords($controlador)."Controller";
        $archivoControlador ='controllers/'.ucwords($controlador).'php';

        if(!is_file($archivoControlador))
        {
            $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
        }

        require_once $archivoControlador;
        $control = new $nombreControlador();
    }