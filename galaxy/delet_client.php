<?php
    include_once('config.php');

    $urlDelet = "https://api.sandbox.cloud.galaxpay.com.br/v2/customers/11/myId";

    $keyDelet = json_decode($request, true);

    $headerDelet = array("Authorization:".$keyDelet['token_type']." ".$keyDelet['access_token']);

    curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $urlDelet,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => $headerDelet

    ]);

    $requestDelet = curl_exec($curl);

    curl_close($curl);

    // echo "<pre>"; print_r($requestDelet); echo "</pre>"; exit;

?>