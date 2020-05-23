let docs = document.querySelector('#docs');

docs.addEventListener('click', () => {
    let invoice = document.querySelector('#invoice');
    invoice.classList.remove('menuItemActive');
    docs.classList.add('menuItemActive');

    content.innerHTML = "<div class='component'><p class='title'>Все документы</p></div>";
    let component = document.querySelector('.component');
    // Получение всех услуг\товаров
    function getAllDocs() {
        var xhr = new XMLHttpRequest();

        xhr.open('GET', 'http://easyfin/app/querys/getAllDocs.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {

                let resultQuery = xhr.responseText;
                // Разбить строку, разделителем ',' на элементы массива
                resultQuery = resultQuery.split(',');
                component.innerHTML += '<p class="docItem" style="border-radius: 5px; background: rgb(77, 77, 77);"><span class="docTableItem">Номер</span><span class="docTableItem">Дата</span><span class="docTableItem">Контрагент</span></p>';
                for(let i = 0; i < resultQuery.length && i != resultQuery.length -1; i++) {
                    component.innerHTML += '<p class="docItem">'+resultQuery[i]+'</p>';
   
                }
            }
        }
        xhr.send();
    }
    getAllDocs();
});