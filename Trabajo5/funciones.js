/* crear 3 objetos que se llamen persona con: nombre, apellido, edad, sexo
Persona1: edad = 33, sexo = masculino
Persona2: edad = 12, sexo = femenino
Persona3: edad = 94, sexo = femenino
En cada uno hacer una funcion llamada NombreCompleto que devuelva "Apellido, Nombre"

Crear un cuarto objeto que se llame MostrarPersona
Crear funcion que muestre "Apellido, Nombre " de las personas mayores de 18 años
*/

const PERSONA1 = {
    nombre: 'Agustin',
    apellido: 'Caceres',
    edad: 33,
    sexo: 'masculino',
    NombreCompleto: function(){
        return this.apellido + ', ' + this.nombre;
    }
}

const PERSONA2 = {
    nombre: 'Ailen',
    apellido: 'Fernandez',
    edad: 12,
    sexo: 'femenino',
    NombreCompleto: function(){
        return this.apellido + ', ' + this.nombre;
    }
}

const PERSONA3 = {
    nombre: 'Antonella',
    apellido: 'Perez',
    edad: 94,
    sexo: 'femenino',
    NombreCompleto: function(){
        return this.apellido + ', ' + this.nombre;
    }
}

const MOSTRARPERSONA = {
    mayor: function(){
        console.log('Personas mayores de 18 años:');
        if (PERSONA1.edad > 18) {
            console.log(PERSONA1.NombreCompleto());
        }
        if (PERSONA2.edad > 18){
            console.log(PERSONA2.NombreCompleto());
        }
        if (PERSONA3.edad > 18) {
            console.log(PERSONA3.NombreCompleto());
        }
    }
}
console.log(MOSTRARPERSONA.mayor());
