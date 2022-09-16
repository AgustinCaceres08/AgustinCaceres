const div = document.getElementById('div');
const select = document.getElementById('select');

select.addEventListener("change",function () {
    switch (select.value) {
        case "1":
            div.innerHTML='Arancel: $1000';
            break;
        case "2":
            div.innerHTML='Arancel: $500';
            break;
    }
})

