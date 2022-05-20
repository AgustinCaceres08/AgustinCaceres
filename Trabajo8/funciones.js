fetch('https://randomuser.me/api')
.then(res => res.json())
.then(data => {
    console.log(data.results[0])
})

function mostrar(){
    fetch('https://randomuser.me/api')
    .then(res => res.json())
    .then(data => {
       let html = `
            Nombre: ${data.results[0].name.first} <br>
            Apellido: ${data.results[0].name.last} <br>
            Genero: ${data.results[0].gender} <br>
            Edad: ${data.results[0].dob.age} <br>
            Email: ${data.results[0].email} <br>
            Latitud: ${data.results[0].location.coordinates.latitude} <br>
            Longitud: ${data.results[0].location.coordinates.longitude} <br>
            Foto: <br>
             <img src="${data.results[0].picture.large}">
        ` 
        var lat = data.results[0].location.coordinates.latitude;
        var lon = data.results[0].location.coordinates.longitude;

        console.log(data.results[0])

    if (data.results[0].dob.age >= 20 && data.results[0].dob.age <=40 && data.results[0].gender == 'female') {
        document.getElementById('cont').innerHTML=html

        var map = L.map('map').setView([lat, lon], 13);

        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18
        }).addTo(map);
    
        L.control.scale().addTo(map);
        L.marker([lat, lon], {draggable: true}).addTo(map);
    }
    else {
        document.getElementById('cont').innerHTML='Usuario no encontrado'
    }
    })
}

// Crear un mapa con las coordenadas usando leaflet
