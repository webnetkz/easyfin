<?php

    require_once 'app/DB/PDO.php';

?>
<style>
    body {
        font-family: sans-serif;
    }
    .inp {
        display: block;
        margin: 10px;
        width: 20em;
        text-align: center;
    }
    .inpR {
        display: inline;
        margin: 10px;
    }
    .contrNew {
        display: none;
        transition-duration: 600ms;
    }
</style>

<h1>Счет на оплату</h1>
<form action="#" method="POST">
    <label for="contr">Действующий</label>
    <input type="radio" class="inpR" name="cotnr[]" id="contr" onclick="oldContr();">
    <label for="contrNew">Новый</label>
    <input type="radio" class="inpR" name="cotnr[]" id="contrNew" onclick="newContr();">
    <input type="text" class="inp" placeholder="Наименование контрагента" >

    <div class="contrNew">
        <hr>
        <input type="text" class="inp" placeholder="БИН/ИИН">
        <input type="text" class="inp" placeholder="Наименование">
        <input type="text" class="inp" placeholder="Адрес">
        <input type="text" class="inp" placeholder="БАНК"> 
        <hr> 
    </div>

    <input type="text" class="inp" placeholder="Товар/Услуга">

    <input type="text" class="inp">
</form>

<script>

    var contrNew = document.querySelector(".contrNew");
    function newContr() {
        contrNew.style.display = 'block';
    }
    function oldContr() {
        contrNew.style.display = 'none';
    }
    console.log(contrNew);
</script>