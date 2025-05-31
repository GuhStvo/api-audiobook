<?php

if($_SERVER["REQUEST_METHOD" == "DELETE"]) {

    $id_capitulo = $_GET["id_capitulo"];

    $contollerCapitulos = new controllerCapitulos();

} else {
    http_response_code(405);
    echo json_encode(["message" => "Método não permitido"]);
}