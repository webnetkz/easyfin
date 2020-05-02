<?php
require_once 'mycompany.php';

if( !empty($_POST) ) {

    $nameContr = $_POST['nameContr'];
    $service = $_POST['service'];
    $number = $_POST['number'];

    if($service == 'r') {
        $service = 'Ручка';
        $price = 120;
    }
    if($service == 'k') {
        $service = 'Карандаш';
        $price = 220;
    }
    if($service == 'b') {
        $service = 'Бумага';
        $price = 320;
    }
    $price = $price * $number;

    if($_POST['newNameContr']) {
        $newNameContr = $_POST['newNameContr'];
        $binContr = $_POST['binContr'];
        $adresContr = $_POST['adresContr'];
        $bankContr = $_POST['bankContr'];
    }
    
    echo '<pre>';
}
?>
<h3>Счет на оплату № <?=$order;?> от <?=$date;?></h3>
    <hr>
<h2>Поставщик:</h2>
    <p>Товарищество с ограниченной ответственностью <?=$name;?></p>
    <p>БИН <?=$bin;?></p>
    <p>КБЕ <?=$kbe;?></p>
    <p>ИИК <?=$iik;?></p>
    <p>Банк <?=$bank;?></p>
    <p>Адрес <?=$adres;?></p>
        <hr>
<h2>Покупатель:</h2>
    <p>Товарищество с ограниченной ответственностью <?=$client_name;?></p>
    <p>БИН <?=$client_bin;?></p>
    <p>Адрес <?=$client_adres;?></p>
        <hr>
<h2>Товары\Услуги:</h2>
    <p>Наименование: <?=$service;?></p>
    <p>Колличество: <?=$number;?></p>
    <p>Общая стоимость: <?=$price;?></p>
        <hr>