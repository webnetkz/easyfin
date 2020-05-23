let docs = document.querySelector('#docs');

function getAllDocsLink() {
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'http://easyfin/app/querys/getAllDocsLinks.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {

            let resultQueryX = xhr.responseText;
            // Разбить строку, разделителем ',' на элементы массива
            resultQueryX = resultQueryX.split(',');
            resultQueryX.pop();

            let docItemLink = document.querySelectorAll('.docItemLink');
            
            console.log(resultQueryX);
            for(let i = 1; i < resultQueryX.length && i != resultQueryX.length -1; i++) {
                docItemLink[i].Attribute('href',$resultQueryX[i]);
            }
        }
    }
    xhr.send();
}

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

                getAllDocsLink();

                let resultQuery = xhr.responseText;
                // Разбить строку, разделителем ',' на элементы массива
                resultQuery = resultQuery.split(',');
                component.innerHTML += '<p class="docItem" style="border-radius: 5px; background: rgb(77, 77, 77);"><span class="docTableItem">Номер</span><span class="docTableItem">Дата</span><span class="docTableItem">Контрагент</span></p>';
                for(let i = 0; i < resultQuery.length && i != resultQuery.length -1; i++) {
                    component.innerHTML += '<a class="docItemLink"><p class="docItem">'+resultQuery[i]+'</p></a>';
                }
            }
        }
        xhr.send();
    }
    getAllDocs();
});