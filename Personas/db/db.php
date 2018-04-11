<?php

class Conectar{
    public static function conexion(){
        $conexion =  new mysqli("127.0.0.1", "root", "", "db_cgaria", 3306);
        $conexion ->query("personas 'utf8'");
        return $conexion;
    }
}

