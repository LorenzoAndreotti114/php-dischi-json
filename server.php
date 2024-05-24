<?php 

    // PRELEVAZIONE DATI DA JSON
    $dischi_json = file_get_contents("dischi.json");
    $array_dischi = json_decode($dischi_json, true);

    // LOGICA

    // OUTPUT
    $response = [

        "results" => $array_dischi,
        "success" => true

    ];

    $response_json = json_encode($response);
    header("Content-Type: application/json");
    echo $response_json;

?>
