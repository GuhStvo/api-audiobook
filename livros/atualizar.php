<?php

require_once '../controllers/constrollerLivros.php';

if($_SERVER['REQUEST_METHOD'] == 'PUT') {

    // Pegar o id de atualização
    $query = $_SERVER["QUERY_STRING"];
    parse_str($query, $params);

    $id = $params["id"];

    // Esses são os dados que serão atualizados
    $data = json_decode(file_get_contents('php://input'), true);

} else {
    http_response_code(405);
    echo json_encode(["message"] => "Método não permitido.")
}