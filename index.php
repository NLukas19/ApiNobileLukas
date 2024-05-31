<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');

require_once "controladores/rutas.controlador.php";

require_once "controladores/get.controlador.php";
require_once "modelos/get.modelo.php";

$index = new RutasControlador();
$index -> index();
