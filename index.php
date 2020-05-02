<?php
    require_once 'mycompany.php';
?>
<style>
    body {
        font-family: sans-serif;
        transition-duration: 900ms;
    }
    .inp {
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

<h1>Счет на оплату № <?=$order;?></h1>
<form action="order.php" method="POST">
    <h3>Выбор контрагента</h3>
    <label for="contrNew" class="headerContr">Новый контрагент</label>
    <input type="checkbox" class="inpR" name="contrNew" id="contrNew" oninput="appendContr();" value="1">
        <hr>
    <label for="nameContr">Выбрать контрагента</label>
        <br>
    <select name="nameContr" id="nameContr" class="inp">
        <option value="Topol">Тополь</option>
    </select>
        <br>
    <input type="text" name="newNameContr" placeholder="Наименование контрагента" class="inp newNameContr" style="display: none;">

    <div class="contrNew">
        <input type="text" class="inp" placeholder="БИН/ИИН" name="binContr">
            <br>
        <input type="text" class="inp" placeholder="Адрес" name="adresContr">
            <br>
        <input type="text" class="inp" placeholder="БАНК" name="bankContr"> 
        <hr> 
    </div>

    <label for="nameService">Наименование товара</label>
    <div class="nameService">
            <br>
        <select name="service" class="inp">
            <option value="r">Ручка</option>
            <option value="k">Карандаш</option>
            <option value="b">Бумага</option>
        </select>
        <input type="text" placeholder="Колличиство" name="number">
            <br>
        <div id="appendServiceNew"></div>
    </div>
    <button>Выставить счет на опалту</button>
</form>

<script>

    var contrNew = document.querySelector("#contrNew");
    var newContr = document.querySelector(".contrNew");
    var headerContr = document.querySelector(".headerContr");
    var nameContr = document.querySelector("#nameContr");
    var newNameContr = document.querySelector(".newNameContr");
    function appendContr() {
            newNameContr.style.display = 'block';
            newContr.style.display = 'block'
            contrNew.style.display = 'none';
            headerContr.style.display = 'none';
            nameContr.style.display = 'none';
    }

</script>