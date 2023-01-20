<?php
    include_once('config.php');

    $urlCreat = "https://api.sandbox.cloud.galaxpay.com.br/v2/customers";

    $keyCreat = json_decode($request, true);

    $headerCreat = array("Authorization:".$keyCreat['token_type']." ".$keyCreat['access_token']);

    $bodyCreat = '{
        "myId": "pay-63c94b66ae8175.55689613",
        "name": "Lorem ipsum dolor sit amet.",
        "document": "98931254997",
        "emails": [
            "teste585email5039@galaxpay.com.br",
            "teste8939email3083@galaxpay.com.br"
        ],
        "phones": [
            3140201512,
            31983890110
        ],
        "invoiceHoldIss": false,
        "municipalDocument": "121212121212-02",
        "password": "asd45a564s4d54as@aaa",
        "Address": {
            "zipCode": "30411330",
            "street": "Rua platina",
            "number": "1330",
            "complement": "2º andar",
            "neighborhood": "Prado",
            "city": "Belo Horizonte",
            "state": "MG"
        },
        "ExtraFields": [
            {
                "tagName": "CP_MATRICULA",
                "tagValue": "A532620"
            }
        ]
    }';

    curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $urlCreat,
        CURLOPT_POSTFIELDS => $bodyCreat,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => $headerCreat

    ]);

    $requestCreat = curl_exec($curl);

    curl_close($curl);

    // echo "<pre>"; print_r($requestCreat); echo "</pre>"; exit;

?>