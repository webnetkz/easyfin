﻿
// Функция добавленя скрипта
// appendScript('Name');
function appendScript(name, e) {
    e = document.querySelector(`#${e}`);
    e.addEventListener('click', () => {

        let allScripts = document.querySelectorAll('script');
        for(let i = 0; i < allScripts.length; i++) {

            if(allScripts[i].getAttribute('src') !== `public/js/${name}.js`) {
                let getAllInvoice = document.createElement('script');
                getAllInvoice.setAttribute('src', `public/js/${name}.js`);
                getAllInvoice.setAttribute('id', `${name}S`);
                document.body.append(getAllInvoice);
            } else {
                let getAllInvoice = document.querySelector(`${name}S`);
                if(getAllInvoice !== null) {
                    getAllInvoice.parentNode.removeChild(getAllInvoice);
                }
            }
        }

    });
}
appendScript('invoice', 'invoice');
