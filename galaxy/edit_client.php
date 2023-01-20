<?php
    include_once('config.php');

    $urlEdit = "https://api.sandbox.cloud.galaxpay.com.br/v2/customers/2/myId";

    $keyEdit = json_decode($request, true);

    $headerEdit = array("Authorization:".$keyEdit['token_type']." ".$keyEdit['access_token']);

    $bodyEdit = '{
        "myId": "pay-63c95592934c74.14838005",
        "name": "Lorem ipsum dolor sit amet.",
        "document": "41024898431",
        "emails": [
            "teste3349email7956@galaxpay.com.br",
            "teste8095email2836@galaxpay.com.br"
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
        CURLOPT_URL => $urlEdit,
        CURLOPT_POSTFIELDS => $bodyEdit,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_HTTPHEADER => $headerEdit

    ]);

    $requestEdit = curl_exec($curl);

    curl_close($curl);

    // echo "<pre>"; print_r($requestEdit); echo "</pre>"; exit;


?>