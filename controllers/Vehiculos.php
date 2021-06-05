<?php
    Class VehiculosController
    {
        public function index()
        {
            require_once "models/VehiculosModel.php";
            $vehiculos = new Vehiculos_model();
            $data["titulo"] = "Vehiculos";
            $data["vehiculos"] = $vehiculos -> get_vehiculos();
            require_once "views/vehiculos/vehiculos.php";
        }

        public function nuevo()
        {
            $data["titulo"] = "Vehiculos";
            require_once "views/vehiculos/vehiculos_nuevo.php";
        }
    }