<?php
    class Conectar
    {
        public static function conexion(){
            $conexion = new mysqli("localhost","root","","ejemplo_mvc");
            return $conexion;
        }
    }