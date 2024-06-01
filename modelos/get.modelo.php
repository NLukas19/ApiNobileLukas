<?php
require_once "conexion.php";

class GetModelo
{

    static public function TraerInformacion($table)
    {

        try {
            $ventana =Conexion::conectar()->prepare("SELECT * FROM $table");
            $ventana->execute();
            return $ventana->fetchAll(PDO::FETCH_CLASS);

        } catch (PDOException $e) {
            //echo "Error de: " . $e -> getMessage();
        }
    }

    static public function FiltradoDeDatos($table, $linkTo, $equalTo){

        try{
            $ventana= Conexion::conectar()->prepare("SELECT * FROM $table WHERE $linkTo=:$linkTo");
            $ventana->bindParam(":". $linkTo, $equalTo, PDO::PARAM_STR);
            $ventana->execute();

            return $ventana->fetchAll(PDO::FETCH_CLASS);
        }
        catch(PDOException $e){

            //echo "Error de:". $e->getMessage();
        }
    }


}