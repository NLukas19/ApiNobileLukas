<?php

class GetControlador
{

    static public function TraerInformacion($table)
    {

        $respuesta = GetModelo::TraerInformacion($table);

        $devolver = new GetControlador();
        $devolver->frcRespuesta($respuesta, "TraerInformacion");
    }

        //peticion GET con filtro
    static public function FiltradoDeDatos($table, $linkTo, $equalTo){

        $respuesta = GetModelo::FiltradoDeDatos($table, $linkTo, $equalTo);

        $devolver= new GetControlador();
        $devolver ->frcRespuesta($respuesta, "FiltradoDeDatos");

    }
    //respuesta del controlador
    private function frcRespuesta($respuesta, $metodo)
    {

        if (!empty($respuesta)) {

            $json = array(
                "status" => 200,
                "total" => count($respuesta),
                "result" => $respuesta

            );

        } else {
            $json = array(
                "status" => 404,
                "total" => 'No encontrado',
                "result" => $metodo

            );
        }
        echo json_encode($json, http_response_code($json['status']));
        return;
    }


}
