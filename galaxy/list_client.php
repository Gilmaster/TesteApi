<?php
    include_once('config.php');

    $urlList = "https://api.sandbox.cloud.galaxpay.com.br/v2/customers?startAt=0&limit=100";

    $keyList = json_decode($request, true);

    $headerList = array("Authorization:".$keyList['token_type']." ".$keyList['access_token']);

    curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $urlList,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => $headerList

    ]);

    $requestList = curl_exec($curl);

    curl_close($curl);

    // echo "<pre>"; print_r($requestList); echo "</pre>"; exit;


?>