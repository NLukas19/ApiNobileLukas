<?php

class Conexion
{
    static public function conectar()
    {
        try
        {
            $link = new PDO("mysql:host=localhost;dbname=BaseConstructora" , "root", "");
            $link->exec("set names utf8");
            return $link;
        }
        catch (PDOException $e)
        {
            die("Error en la conexión a la base de datos: " . $e->getMessage());
        }
    }
}