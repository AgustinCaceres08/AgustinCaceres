/* -- Funcion fetch --
fetch('texto.txt')
.then(data => data.text())
.then(data => {
    console.log(data)
})
*/

fetch('https://randomuser.me/api')
.then(res => res.json())
.then(data => {
    console.log(data.results[0])
})

function mostrar(){
    fetch('https://randomuser.me/api')
    .then(res => res.json())
    .then(data => {
        document.getElementById('A').innerText=data.results[0].name.first;
        document.getElementById('B').innerText=data.results[0].name.last;
        document.getElementById('C').innerText=data.results[0].gender;
        document.getElementById('D').innerText=data.results[0].email;
        document.getElementById('E').innerText=data.results[0].picture.large;
    })
}
