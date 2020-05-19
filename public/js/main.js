let content = document.querySelector('.container');

let invoice = document.querySelector('#invoice');
invoice.addEventListener('click', () => {
    content.innerHTML = "<div class='component'>" +
    "<form name='invoice'>" +
        "<p class='title'>Новый счет на оплату <button type='reset' class='btn' onclick='newAgent();'>Новый контрагент</button></p>" +
            "<hr>" +
            "<div class='invoice'>" +
                "<p class='titleLitle'>Выбрать контрагента</p>" +
                "<select>" +
                    "<option>Контрагент 1</option>" +
                    "<option>Контрагент 2</option>" +
                    "<option>Контрагент 3</option>" +
                    "<option>Контрагент 4</option>" +
                    "<option>Контрагент 5</option>" +
                "</select>" +
            "</div>" +
    "</form>" +
    "</div>";
});

let invoicex = document.querySelector('#invoicex');
invoicex.addEventListener('click', () => {
    content.innerHTML = "<div class='component'>Все документы</div>";
});