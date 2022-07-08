const SOCIO1 = {
    apellido: 'Caceres',
    nombre: 'Agustin',
    edad: 21,
    facturas: 1,
    dni: 1
};

const SOCIO2 ={
    apellido: 'Perez',
    nombre: 'Enzo',
    edad: 52,
    facturas: 6,
    dni: 2
};

const SOCIO3 = {
    apellido: 'Fernandez',
    nombre:'Maria',
    edad: 39,
    facturas: 3,
    dni: 3
};

const SOCIO4 = {
    apellido: 'Gonzalez',
    nombre:'Valentina',
    edad: 19,
    facturas: 20,
    dni: 4
};

const SOCIO5 = {
    apellido:'Ramos',
    nombre: 'Juan',
    edad: 14,
    facturas: 4,
    dni: 5
};

let socios = [SOCIO1,SOCIO2,SOCIO3,SOCIO4,SOCIO5];

function enviar() {
    let dni = document.getElementById("dni").value
    let resultado
    let color

    socios.forEach(element => {
        if (element.dni == dni) {
         resultado = element 
        }
     });
    
    if (resultado==undefined) {
        document.getElementById("div").style.background = "red";
        document.getElementById("div").innerHTML = "No existe";
    }else{
        if(resultado.facturas<=3){
            color = "green"
        }
    
        if(resultado.facturas>3 && resultado.facturas<6){
            color = "yellow"
            }
    
        if(resultado.facturas>=6){
            color = "red"
        }

        document.getElementById("div").style.background = color;
        document.getElementById("div").innerHTML = "Nombre: "+resultado.nombre+`<br>`+"Apellido: "+resultado.apellido+"<br>"+"Facturas: "+resultado.facturas;
    }
}
