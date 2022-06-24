
let socio = [
    {
        apellido: 'Caceres',
        nombre: 'Agustin',
        edad: 21,
        facturas: 1,
        dni: 42569210
    },
    {
        apellido: 'Perez',
        nombre: 'Enzo',
        edad: 52,
        facturas: 6,
        dni: 62532104
    },
    {
        apellido: 'Fernandez',
        nombre:'Maria',
        edad: 39,
        facturas: 3,
        dni: 89541279
    },
    {
        apellido: 'Gonzalez',
        nombre:'Valentina',
        edad: 19,
        facturas: 20,
        dni: 3
    },
    {
        apellido:'Ramos',
        nombre: 'Juan',
        edad: 14,
        facturas: 7,
        dni: 49654273
    }
]

function enviar() {
    let dni = document.getElementById("dni").value
    let resultado;

    socio.forEach(element => {
       if (element.dni == dni) {
        resultado = element 
       }
    });

    if (resultado==undefined) {
        div.style.backgroundColor = "red";
        div.innerHTML= ` No existe`
    }else{
        if(resultado.facturas<3){
            pintar(resultado.nombre,resultado.apellido,resultado.facturas, "green");
        }
    
        if(resultado.facturas>3 && datos.facturas<6){
            pintar(resultado.nombre,resultado.apellido,resultado.facturas, "yellow")
        }
    
        if(resultado.facturas>6){
            pintar(resultado.nombre,resultado.apellido,resultado.facturas, "red")
        }
    }
}

function pintar(nombre,apellido,facturas,color) {
    div.style.backgroundColor = color;
    div.innerHTML= `
    Nombre: ${nombre} ${apellido}<br>
    Facturas: ${facturas}
    `
}
