<?php
// Настройка запроса на сервер
$url = curl_init('https://home.courierexe.ru/api/');
curl_setopt($url, CURLOPT_POST, 1);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);

// Генерация XML запроса на сервер

$request = <<<XML
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<neworder newfolder="YES">
    <auth extra="290" login="ytsd" pass="ytds11!!QQ!!"/>
    <order orderno="YTOA-20200507000011">
        <barcode>YTOA-20200507000011</barcode>
        <sender>
            <company>hebei ytsd</company>
            <person>joy</person>
            <phone>1234567891</phone>
            <town>pekin</town>
            <address>china hebei shijiazhuang air port</address>
        </sender>
        <receiver>
            <company>fuquanwei</company>
            <person>fuquanwei</person>
            <phone>15533669988</phone>
            <zipcode></zipcode>
            <town regioncode="" country="RU">Казань</town>
            <address>Абая 1</address>
            <pvz></pvz>
            <inn></inn>
        </receiver>
        <return>NO</return>
        <weight>27.0</weight>
        <return_weight>27.0</return_weight>
        <quantity>1.0</quantity>
        <paytype>0</paytype>
        <service></service>
        <return_service></return_service>
        <type>2</type>
        <return_type></return_type>
        <courier></courier>
        <price>0.0</price>
        <deliveryprice></deliveryprice>
        <inshprice></inshprice>
        <receiverpays>NO</receiverpays>
        <enclosure></enclosure>
        <pickup>NO</pickup>
    </order>
</neworder>
XML;


// Настройка заголовков и отправка сообщения
curl_setopt($url, CURLOPT_HTTPHEADER, 
        array('Content-Type: text/xml; charset=utf-8', 
              'Content-Length: '.strlen($request)));

curl_setopt($url, CURLOPT_POSTFIELDS, $request);

// Получение ответа в виде XML
$response = curl_exec($url);

// Завершения соединения через CURL
curl_close($url);
var_dump($response);

