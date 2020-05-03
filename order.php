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
    $priceAll = $price * $number;
    $code = 1543;

    if($_POST['newNameContr']) {
        $newNameContr = $_POST['newNameContr'];
        $binContr = $_POST['binContr'];
        $adresContr = $_POST['adresContr'];
        $bankContr = $_POST['bankContr'];
    }
}
?>



        <p style="font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(0, 0, 0);"><br></p>
<table id="header-table" style="margin: 0px; padding: 0px; overflow-x: auto; width: 823px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">
   <tbody style="margin: 0px; padding: 0px;">
      <tr style="margin: 0px; padding: 0px;">
         <td colspan="3" style="margin: 0px; padding: 2px 5px; border: none;">
            <div id="header-table-header2" style="margin: 0px; padding: 0px; font-weight: 600; font-size: 1rem;">Образец платежного поручения</div>
         </td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered bolded" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); font-weight: 700;">Бенефициар:</td>
         <td class="bordered centered bolded" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; font-weight: 700;">ИИК</td>
         <td class="bordered centered bolded" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; font-weight: 700;">Кбе</td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);">ИИН/БИН: <?=$bin;?></td>
         <td class="bordered centered" rowspan="2" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;"><?=$iik;?></td>
         <td class="bordered centered" rowspan="2" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;"><?=$kbe;?></td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"></td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);">Банк бенефициара:</td>
         <td class="bordered centered bolded" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; font-weight: 700;">БИК</td>
         <td class="bordered centered bolded" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; font-weight: 700;">Код назначения платежа</td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"></td>
         <td class="bordered centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;"><?=$bik;?></td>
         <td class="bordered centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;">853</td>
      </tr>
   </tbody>
</table>
<div id="main-header" style="margin: 20px 0px 10px 5px; padding: 0px; font-size: 1.2rem; font-weight: 700; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; background-color: rgb(248, 248, 248);">Счет на оплату № <?=$order;?> от <?=$date;?></div>
<hr style="margin: 0px 0px 10px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">
<table id="second-table" style="margin: 0px; padding: 0px; overflow-x: auto; width: 823px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">
   <tbody style="margin: 0px; padding: 0px;">
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered-bottom" style="margin: 0px; padding: 2px 5px; border-bottom: 1px solid rgb(119, 119, 119); border-top: none; border-right: none; border-left: none; border-image: initial;">Поставщик:</td>
         <td class="bordered-bottom" style="margin: 0px; padding: 2px 5px; border-bottom: 1px solid rgb(119, 119, 119); border-top: none; border-right: none; border-left: none; border-image: initial;">БИН\ИИН: <?=$bin;?>, ТОО <?=$name;?>, <?=$adres?></td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered-bottom" style="margin: 0px; padding: 2px 5px; border-bottom: 1px solid rgb(119, 119, 119); border-top: none; border-right: none; border-left: none; border-image: initial;">Покупатель:</td>
         <td class="bordered-bottom" style="margin: 0px; padding: 2px 5px; border-bottom: 1px solid rgb(119, 119, 119); border-top: none; border-right: none; border-left: none; border-image: initial;">
            <br style="margin: 0px; padding: 0px;">
            <div style="margin: 0px; padding: 0px;">БИН\ИИН: <?=$client_bin;?>, TOO <?=$client_name;?>, <?=$client_adres;?></div>
         </td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td class="bordered-bottom" style="margin: 0px; padding: 2px 5px; border-bottom: 1px solid rgb(119, 119, 119); border-top: none; border-right: none; border-left: none; border-image: initial;">Договор:</td>
         <td class="bordered-bottom" style="margin: 0px; padding: 2px 5px; border-bottom: 1px solid rgb(119, 119, 119); border-top: none; border-right: none; border-left: none; border-image: initial;">Без договора</td>
      </tr>
   </tbody>
</table>
<p><br style="margin: 0px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);"></p>
<table id="details-table" style="margin: 0px; padding: 0px; overflow-x: auto; width: 823px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">
   <tbody style="margin: 0px; padding: 0px;">
      <tr style="margin: 0px; padding: 0px;">
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;">№</td>
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;">Код</td>
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; width: 561px;">Наименование</td>
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;">Кол-во</td>
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center;">Ед. изм.</td>
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; white-space: nowrap;">Цена за ед.</td>
         <td class="centered" style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); text-align: center; white-space: nowrap;">Сумма</td>
      </tr>
      <tr style="margin: 0px; padding: 0px;">
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);">1</td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"><?=$code;?></td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"><?=$service;?></td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"><?=$number;?></td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"></td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); white-space: nowrap;"><?=$price;?></td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119); white-space: nowrap;"><?=$priceAll;?></td>
      </tr>
      <tr id="itog-row" style="margin: 0px; padding: 0px;">
         <td colspan="6" style="margin: 0px; padding: 2px 5px; border: none; text-align: right;">Итого:</td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"><?=$priceAll;?></td>
      </tr>
      <tr id="nds-row" style="margin: 0px; padding: 0px;">
         <td colspan="6" style="margin: 0px; padding: 2px 5px; border: none; text-align: right;">В том числе НДС:</td>
         <td style="margin: 0px; padding: 2px 5px; border: 1px solid rgb(119, 119, 119);"></td>
      </tr>
   </tbody>
</table>
<p><br style="margin: 0px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);"></p>
<div style="margin: 0px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">Всего наименований 1, на сумму <?=$priceAll;?> KZT</div>
<div style="margin: 0px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">Всего к оплате: <?=$priceAll;?> тг.</div>
<hr style="margin: 0px 0px 10px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">
<div style="margin: 0px; padding: 0px; font-family: &quot;Segoe UI&quot;, HelveticaNeue-Light, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: rgb(248, 248, 248);">Исполнитель ________________</div>