<?php   

class GetControlador{

    static public function TraerInformacion($table){

        $respuesta = GetModelo:: TraerInformacion($table);

        $devolver = new GetControlador();
        $devolver -> frcRespuesta($respuesta, "TraerInformacion");
    }

    private function frcRespuesta($respuesta, $metodo){

        if (!empty($respuesta)){

            $json = array(
                "status" => 200,
                "total" => count ($respuesta),
                "result" => $respuesta

            );

        } else {
            $json = array(
                "status" => 404,
                "total" => 'No encontrado',
                "result" => $metodo

            );
        }
        echo json_encode($json, http_response_code($json['estado']));
        return;
    }


}
