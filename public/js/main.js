let content = document.querySelector('.container');


// Получение всех контрагентов
function getAllAgents() {
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'http://easyfin/app/querys/getAllAgents.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            let resultQuery = xhr.responseText;
            resultQuery = resultQuery.slice(0, -1);
            resultQuery = resultQuery.slice(1);
            resultQuery = resultQuery.split(',');
            console.log(resultQuery);

            // Компонент счета на оплату
            let invoice = document.querySelector('#invoice');
            invoice.addEventListener('click', () => {
                content.innerHTML = "<div class='component'>" +
                "<form name='invoice'>" +
                    "<p class='title'>Новый счет на оплату <button type='reset' class='btn' onclick='newAgent();'>Новый контрагент</button></p>" +
                        "<hr>" +
                        "<div class='invoice'>" +
                            "<p class='titleLitle'>Выбрать контрагента</p>" +
                            "<select>" +
                                "<option>Выбрать</option>" +
                                "<option>" +
                                resultQuery[0] +
                                "</option>" +
                                "<option>" +
                                resultQuery[1] +
                                "</option>" +
                                "<option>" +
                                resultQuery[2] +
                                "</option>" +
                                "<option>Контрагент 2</option>" +
                                "<option>Контрагент 3</option>" +
                                "<option>Контрагент 4</option>" +
                                "<option>Контрагент 5</option>" +
                            "</select>" +
                        "</div>" +
                "</form>" +
                "</div>";
            });

        }
    }
    xhr.send();
}
getAllAgents();






let invoicex = document.querySelector('#invoicex');
invoicex.addEventListener('click', () => {
    content.innerHTML = "<div class='component'>Все документы</div>";
});


