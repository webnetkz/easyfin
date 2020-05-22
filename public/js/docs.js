let docs = document.querySelector('#docs');

docs.addEventListener('click', () => {
    content.innerHTML = "<div class='component'>Все документы</div>";
    let container = document.querySelector('.container');
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
                for(let i = 0; i < resultQuery.length && i != resultQuery.length -1; i++) {
                    container.innerHTML += '<p class="line" style="margin-top: 20px;">'+resultQuery[i]+'</p>';
   
                }
            }
        }
        xhr.send();
    }
    getAllDocs();
});