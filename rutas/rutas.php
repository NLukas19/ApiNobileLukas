<?php   

$rutasArray = explode ("/", $_SERVER["REQUEST_URI"]);
$rutasArray = array_filter($rutasArray);

if (count($rutasArray)== 1){
    $json = array(
        "status" => 404,
        "result" => 'No encontrado' 
    );

    echo json_encode($json, http_response_code($json["status"]));
    return; 
} else {
    
    if (count($rutasArray) == 2 && isset($_SERVER["REQUEST_METHOD"]) && 
    $_SERVER["REQUEST_METHOD"] == "GET" ){

        if (isset($_GET["linkTo"]) && isset($_GET["equalTo"])){

            
        } else {
            $respuesta = new GetControlador();
            $respuesta -> TraerInformacion($rutasArray[2]);

        }

    }

}